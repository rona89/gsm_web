#!/bin/bash
LOG="/opt/gsm/bts.log"
DIR="/opt/gsm/"
TMP_FILE="/tmp/gnokii.tmp"
GPS_FILE="/opt/gsm/gps.gpx"
ext=".clf"
modem="modem"
cd ${DIR}

for conf in `ls ${modem}/ | grep ".conf$"`; do
 gnokii --config ${modem}/${conf} --getnetworkinfo > ${TMP_FILE}
 gnokii --config ${modem}/${conf} --monitor once | egrep "RFLevel:|Battery:|Power Source:" >> ${TMP_FILE}

 NC=`cat ${TMP_FILE} | grep "Network code" | cut -d ":" -f2 | tr -d " "`
 if [ ${NC} == "undefined" ]; then 
  NC='23106'
 fi

 LAC=`cat ${TMP_FILE} | grep "LAC" | cut -d ":" -f2 | awk {'print $2'} | tr -d "(" | tr -d ")"`
 if [ `echo ${#LAC}` == '2' ]; then
  LAC="000${LAC}"
 fi

 if [ `echo ${#LAC}` == '3' ]; then
  LAC="00${LAC}"
 fi

 if [ `echo ${#LAC}` == '4' ]; then
  LAC="0${LAC}"
 fi


 CELLID=`cat ${TMP_FILE} | grep "Cell id" | cut -d ":" -f2 | awk {'print $2'} | tr -d "(" | tr -d ")"`
 if [ `echo ${#CELLID}` == '2' ]; then
  CELLID="000${CELLID}"
 fi

 if [ `echo ${#CELLID}` == '3' ]; then
  CELLID="00${CELLID}"
 fi

 if [ `echo ${#CELLID}` == '4' ]; then
  CELLID="0${CELLID}"
 fi

 RFLEVEL=`cat ${TMP_FILE} | grep "RFLevel:" | cut -d ":" -f2`
 BAT=`cat ${TMP_FILE} | grep "Battery:" | cut -d ":" -f2`
 POWERSOURCE=`cat ${TMP_FILE} | grep "Power Source:" | cut -d ":" -f2`


 if [ -f "${GPS_FILE}" ]; then
  LAT="+`cat ${GPS_FILE} | grep 'lat' | cut -d '=' -f2`"
  LON="+`cat ${GPS_FILE} | grep 'lon' | cut -d '=' -f2`"
 else
  LAT="+0.000000"
  LON="+0.000000"
 fi

 DESC=`cat ${DIR}${NC}${ext} | grep ${CELLID} | cut -d ';' -f8 | head -n 1`

 if [ ${NC} != "" ]; then
  echo "${NC} - ${CELLID} - ${LAC} - ${RFLEVEL}dB - ${LAT} - ${LON} - ${BAT}% - ${POWERSOURCE} - ${DESC}"
 fi


# File, created bts.php
 if [ -f "${LOG}" ]; then
  if [ `cat ${LOG} | grep ${NC} | wc -l` == '1' ]; then
   if [ ${NC} != "" ]; then
    sed -i "s/${NC}.*/${NC} - ${CELLID} - ${LAC} - ${RFLEVEL}dB - ${LAT} - ${LON} - ${DESC}/" ${LOG}
    sed -i "/-  -  -/d" ${LOG}
   fi
  else
   if [ ${NC} != "" ]; then
    echo "${NC} - ${CELLID} - ${LAC} - ${RFLEVEL}dB - ${LAT} - ${LON} - ${DESC}" >> ${LOG}
  fi
  fi
 fi



# clf file
 if [ -f "${DIR}${NC}${ext}" ]; then	# If file exist
  if [ `cat ${DIR}${NC}${ext} | grep ${CELLID} | wc -l` -ne "0" ]; then # If cellid exist

   if [ `cat ${DIR}${NC}${ext} | grep ${CELLID} | grep "+0.000000" | wc -l` -ne "0" ]; then # If cellid has not gps in file, replace it
    sed -i "/${NC};${CELLID};/d" ${DIR}${NC}${ext}	# Delete line
    echo "${NC};${CELLID};${LAC};00000;${LAT};${LON};${RFLEVEL};${DESC};0" >> ${DIR}${NC}${ext} # Insert new line
   fi

   if [ ${NC} != "23106" ]; then
    LACE=`cat ${DIR}${NC}${ext} | grep ${CELLID} | grep -v ${LAC} | cut -d ";" -f3`
    if [ ${LACE} != ${LAC} ]; then
     echo "Ine LAC pre CellID ${CELLID}. Povodne {$LACE}, nove {$LAC}. ${DESC}" >> LAC_change.log
     sed -i "/${NC};${CELLID};${LACE};/d" ${DIR}${NC}${ext}      # Delete line
    fi
   fi


  else # If cellid not exist
   echo "${NC};${CELLID};${LAC};00000;${LAT};${LON};${RFLEVEL};no info;0" >> ${DIR}${NC}${ext}
  fi
 else # If file not exist > Create it
  echo "${NC};${CELLID};${LAC};00000;${LAT};${LON};${RFLEVEL};no info;0" >> ${DIR}${NC}${ext}
 fi 

done

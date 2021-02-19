#!/bin/bash
TOTAL="0"
DIR="/opt/gsm/"

cd ${DIR}

for BTS in `ls ${DIR} | grep clf$ | grep 2310`; do
OP="0"
 echo "var latLong = [{" > ${BTS}.txt.tmp
 chown www-data. ${BTS} ${BTS}.txt.tmp
 chmod 644 ${BTS} ${BTS}.txt.tmp
 for SURADNICE in `cat ${DIR}/${BTS} | egrep -v "//|\+0.000" | grep "+" | cut -d ';' -f5,6 | tr -d '\+' | sort | uniq`; do
  echo "\"lat\": `echo ${SURADNICE} | cut -d ';' -f1`," >> ${BTS}.txt.tmp
  echo "\"lng\": `echo ${SURADNICE} | cut -d ';' -f2`" >> ${BTS}.txt.tmp
  echo "}, {" >> ${BTS}.txt.tmp
  let TOTAL++;
  let OP++;
 done
 echo "\"lat\": 0.000000," >> ${BTS}.txt.tmp
 echo "\"lng\": 0.000000" >> ${BTS}.txt.tmp
 echo "}];" >> ${BTS}.txt.tmp
 echo "${BTS} = ${OP}";
 mv ${BTS}.txt.tmp ${DIR}${BTS}.txt
done
echo "Total: ${TOTAL}";


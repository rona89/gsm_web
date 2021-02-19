#!/bin/bash
echo "Script started"
echo "23101 - 00000 - 00000 -  00dB - +00.0000 - +00.000 - " > /opt/gsm/bts.log
echo "23102 - 00000 - 00000 -  00dB - +00.0000 - +00.000 - " >> /opt/gsm/bts.log
echo "23103 - 00000 - 00000 -  00dB - +00.0000 - +00.000 - " >> /opt/gsm/bts.log
echo "23106 - 00000 - 00000 -  00dB - +00.0000 - +00.000 - " >> /opt/gsm/bts.log

for i in `ls | grep clf$`; do 
 mv ${i} ${i}.tmp
 sort ${i}.tmp > ${i}
 rm -f ${i}.tmp
done

while true; do
 /opt/gsm/get_bts.sh 2>/dev/null
 echo "" 
done

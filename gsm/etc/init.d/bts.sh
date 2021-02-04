#!/bin/bash
### BEGIN INIT INFO
# Provides:          ZTK-Comp.sk
# Required-Start:
# Required-Stop:
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# X-Interactive:     true
# Short-Description: BTS
### END INIT INFO

rfcomm bind /dev/rfcomm0 00:02:76:C8:D9:C8
gpsd /dev/rfcomm0 -nb -S 9999 -G -F /var/run/gpsd.sock
screen -S get_gps -dm python3 /opt/gsm/get_gps.py

screen -S get_bts -dm /opt/gsm/02_start.sh


docker exec -it osm_svk /etc/init.d/apache2 stop && rm -f /var/run/apache2/apache2.pid && /etc/init.d/apache2 restart

#!/bin/bash
sudo rfcomm bind /dev/rfcomm0 00:02:76:C8:D9:C8
sudo gpsd /dev/rfcomm0 -nb -S 9999 -G -F /var/run/gpsd.sock
screen -S get_gps -dm python /opt/gsm/get_gps.py

#!/usr/bin/python -tt

import gps

#session = gps.gps("192.168.254.1", "9999")
#session = gps.gps("192.168.254.228", "9999")
session = gps.gps("localhost", "9999")
session.stream(gps.WATCH_ENABLE | gps.WATCH_NEWSTYLE)
print ("Script started")
f= open("/opt/gsm/gps.gpx","w+") #yyyymmdd
f.write("lat=0.0000\nlon=0.0000\nalt=0\n")
f.close()

while True:
 try:
  report = session.next()
  if report['class'] == 'SKY':          # Reportuje pocet satelitov
   print (report);
   print('');
   if hasattr(report, 'satellites'):
    num_sats = 0
    for satellite in report.satellites:
     if hasattr(satellite, 'used') and satellite.used:
      num_sats += 1

  if report['class'] == 'TPV':          # Reportuje lat, lon, alt, track, speed
   if hasattr(report, 'time'):
    if hasattr(report, 'lat'):
     lat = report.lat
    else:
     lat = 0.000000

    if hasattr(report, 'lon'):
     lon = report.lon
    else:
     lon = 0.000000

    if hasattr(report, 'alt'):
     alt = report.alt
    else:
     alt = 0

    if hasattr(report, 'track'):
     track = report.track
    else:
     track = 0

    if hasattr(report, 'speed'):
     speed = report.speed
    else:
     speed = 0

    if hasattr(report, 'climb'):
     climb = report.climb
    else:
     climb = 0

    if hasattr(report, 'mode'):
     mode = report.mode
    else:
     mode = 0

    print("Lat: "+str(round(lat,6))+"; Lon: "+str(round(lon,6))+"; Alt: "+str(round(alt,0))+"; Time: "+report.time+"; Speed: "+str(round(speed))+"; Track: "+str(round(track))+"; Climb: "+str(round(climb,0))+"; Mode: "+str(round(mode,0))+"; Sat: "+str(num_sats)+"\n\n\n")

    f= open("/opt/gsm/gps.gpx","w+") #yyyymmdd
    f.write("lat="+str(round(lat,4))+"\nlon="+str(round(lon,4))+"\nalt="+str(round(alt,0))+"\ntime="+report.time+"\nspeed="+str(round(speed))+"\nsats="+str(num_sats))
    f.close()
#   break

 except KeyError:
  pass
 except KeyboardInterrupt:
  quit()
 except StopIteration:
  session = None
  print("GPSD has terminated")


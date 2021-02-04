# gsm_web
GSM - Web + scripts

file "bts.sh" shoulbe be on /etc/init.d/bts.sh
file "crontab" ... /etc/crontab
all other files are in /opt/gsm/

edit "/etc/apache2/sites-enabled/000-default.conf" and set "<Directory /opt/gsm>
  Require all granted
</Directory>" and change "DocumentRoot /opt/gsm"

for maps, there is running docker container "admik/openstreetmaps"



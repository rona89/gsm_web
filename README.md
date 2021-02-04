***GSM - Web + scripts***

edit "/etc/apache2/sites-enabled/000-default.conf" 
... set "
<Directory /opt/gsm>
  Require all granted
</Directory>
" and change "DocumentRoot /opt/gsm"

for maps, there is running docker container "admik/openstreetmaps"

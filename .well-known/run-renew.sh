#!/usr/bin/env bash
echo 'STARTING!'
DOMAIN=killarneylodge.com
echo $DOMAIN
echo 'starting certbot complete...'
sudo certbot -n -d www.${DOMAIN} -d ${DOMAIN} --webroot -w /home/bitnami/apps/wordpress/htdocs/ --preferred-challenges http certonly
echo 'running certbot complete...'
echo 'backup old certs...'
sudo mv /opt/bitnami/apache2/conf/server.key /opt/bitnami/apache2/conf/server.key.old
sudo mv /opt/bitnami/apache2/conf/server.crt /opt/bitnami/apache2/conf/server.crt.old
echo 'backup old certs complete...'
echo 'linking new cert files...'
sudo ln -s /etc/letsencrypt/live/www.${DOMAIN}/privkey.pem /opt/bitnami/apache2/conf/server.key
sudo ln -s /etc/letsencrypt/live/www.${DOMAIN}/fullchain.pem /opt/bitnami/apache2/conf/server.crt
echo 'linking new cert files complete...'
echo 'restart...'
sudo /opt/bitnami/ctlscript.sh restart
echo 'restart complete'
echo 'ALL DONE!'
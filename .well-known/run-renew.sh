DOMAIN=killarneylodge.com
echo $DOMAIN
sudo certbot -d www.${DOMAIN} -d ${DOMAIN} --webroot -w /home/bitnami/apps/wordpress/htdocs/ --preferred-challenges http certonly
echo 'running certbot complete...'
sudo mv /opt/bitnami/apache2/conf/server.key /opt/bitnami/apache2/conf/server.key.old
sudo mv /opt/bitnami/apache2/conf/server.crt /opt/bitnami/apache2/conf/server.crt.old
echo 'moving old cert file complete...'
sudo ln -s /etc/letsencrypt/live/www.${DOMAIN}/privkey.pem /opt/bitnami/apache2/conf/server.key
sudo ln -s /etc/letsencrypt/live/www.${DOMAIN}/fullchain.pem /opt/bitnami/apache2/conf/server.crt
echo 'linking new cert file complete...'
sudo /opt/bitnami/ctlscript.sh restart
echo 'restart complete... ALL DONE!'
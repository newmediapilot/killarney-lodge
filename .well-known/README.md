# Renew SSL

## Derived from and modified slightly
https://lightsail.aws.amazon.com/ls/docs/en_us/articles/amazon-lightsail-using-lets-encrypt-certificates-with-wordpress

### Start verification

```
DOMAIN=killarneylodge.com
sudo certbot -d www.${DOMAIN} -d ${DOMAIN} --webroot -w /home/bitnami/apps/wordpress/htdocs/ --preferred-challenges http certonly
sudo mv /opt/bitnami/apache2/conf/server.key /opt/bitnami/apache2/conf/server.key.old
sudo mv /opt/bitnami/apache2/conf/server.crt /opt/bitnami/apache2/conf/server.crt.old
sudo ln -s /etc/letsencrypt/live/${DOMAIN}/privkey.pem /opt/bitnami/apache2/conf/server.key
sudo ln -s /etc/letsencrypt/live/${DOMAIN}/fullchain.pem /opt/bitnami/apache2/conf/server.crt
sudo /opt/bitnami/ctlscript.sh restart
```
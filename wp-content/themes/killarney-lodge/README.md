# Configure Bitnami to allow 'localhost' SQL access:
https://docs.bitnami.com/virtual-machine/apps/wordpress/administration/connect-remotely/

#Bitnami test IP (may not be active after launch):
18.205.227.221

#Requirements:
You will need to install NPM on your system
```
sudo apt-get npm
```
#Setup:
```
cd wp-content/themes/killarney-lodge/
npm install
```
#Develop
This will let you update SCSS and JS files and compile to the /dist directory
```
npm start
```
#Deploy
This will compile a one time export into the /dist directory
```
npm run deploy
```
#Tunnel
```
ssh -i "~/.ssh/KillarneyLodge-us-east-1.pem" -L 127.0.0.1:8888:127.0.0.1:80 -L 127.0.0.1:33060:127.0.0.1:3306 bitnami@18.205.227.221
```
#Permissions
```
sudo find /home/bitnami/apps/wordpress/htdocs -type f -exec chmod 777 {} \;
sudo find /home/bitnami/apps/wordpress/htdocs -type d -exec chmod 777 {} \;
```

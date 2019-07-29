# Configure Bitnami to allow 'localhost' SQL access:
https://docs.bitnami.com/virtual-machine/apps/wordpress/administration/connect-remotely/

#Bitnami test IP (may not be active after launch):
3.88.90.29

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

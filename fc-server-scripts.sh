#!/bin/bash

#Ubuntu Update
echo "Updating instance........."
sudo apt-get update

#Install apache2
echo "Installing apache2........."
sudo apt-get install apache2

#Install php
echo "Installing php........."
sudo apt-get install php php-mysql

#Install php-mysql
echo "Installing mysql-client........."
sudo apt-get install mysql-client

#Clone github repository
echo "Clonning github repo fashion-web........."
git clone https://github.com/jayaniathukorala-86/fashion_web.git

mv fashion_web/fc-server-scripts.sh ../
mv fashion_web/fashion_web.sql ../

#Move files to var/www directory
echo "Movinng files to /var/www/html........."
sudo mv fashion_web/* /var/www/html

#Delete index.html
sudo rm -r /var/www/html/index.html
sudo rm -r fashion_web/

#Enable mod_rewrite module in Apache
echo "Enable mod_rewrite module in Apache"
sudo a2enmod rewrite

echo "Restart apache"
sudo systemctl restart apache2

#Enable allowoveride
echo "AllowOverride All"
sudo nano /etc/apache2/apache2.conf
	
sudo systemctl restart apache2

echo "DirectoryIndex index.php

# enable apache rewrite engine
RewriteEngine on

# set your rewrite base
# Edit this in your init method too if you script lives in a subfolder
RewriteBase /

# Deliver the folder or file directly if it exists on the server
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
 
# Push every request to index.php
RewriteRule ^(.*)$ index.php [QSA]" | sudo tee /var/www/html/.htaccess


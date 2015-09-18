#!/usr/bin/env bash

sudo apt-get update
sudo apt-get -y upgrade

sudo apt-get install -y apache2
sudo apt-get install -y php5
sudo apt-get install -y git
sudo apt-get install -y php5-mysql

# setup hosts file
VHOST=$(cat <<EOF
<VirtualHost *:80>
    DocumentRoot "/vagrant/"
    <Directory "/vagrant/">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf

sudo a2enmod rewrite
service apache2 restart

curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

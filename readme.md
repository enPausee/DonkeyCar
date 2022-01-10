## Installation
Installation of the Donkey-Car project
After cloning or downloading the file, please follow the instructions below
## Location of the project
  ###### For linux and mac
    Place the project folder in the /var/www/html/
  ###### For windows
    Follow the instructions of xamp and wamp (see the htdoc file)
## Creation of a virtual host
  ###### For windows
    wamp and xamp allow using a graphical interface to easily create a virtual host
  ###### For linux (https://www.pixel-online.fr/article/208330/comment-ajout-et-supprimer-des-virtuals-hosts-sous-linux/)
    create a virtual host that points to the location defined above (do not forget to specify the / public folder)
    place in etc/apache2/site-available the conf file, example below donkey-car.wip.conf:
  ######
    define ROOT "/var/www/html/donkey-car/public"
    define SITE "donkey-car.wip"
    <VirtualHost *: 80>
    DocumentRoot "$ {ROOT}"
    ServerName $ {SITE}
    ServerAlias ​​*. $ {SITE}
    <DIRECTORY "$ {ROOT}">
    AllowOverride All
    Require all granted
    </DIRECTORY>
    ErrorLog $ {APACHE_LOG_DIR} /error.log
    CustomLog $ {APACHE_LOG_DIR} /access.log combined
    </VirtualHost>
## Give access
  ###### For the following commands, you must be in super user mode (sudo)
    1- Give all rights (777) to the donkey-car project
    2- modify /etc/hosts file by adding the following line
      127.0.0.1 donkey-car.wip
    3- Don't forget to register your virtual host and restart the apache server
      sudo a2ensite donkey-car.wip.conf
      sudo service apache2 restart
## Create a database then at project level
   create a donkey-car / src / Core / _connect.php file with the following content (you must replace the Xs with your data)
  <? php
  const DB_HOST = 'XXXXX';
  const DB_NAME = 'XXXXX';
  const DB_USER = 'XXXXX';
  const DB_PSWD = 'XXXXX';
## In order to fill the database tables, we can rely on php scripts
  ###### open a terminal in the donkey-car folder
  ###### run the following commands
            php sql / createDb.php
            php sql / fillDb.php
## Type the following command:
  composer instal
## At browser level, enter the url of your virtual host
  example: http: //donkey-car.wip/
## Contributors:
Matthias Lagrabe
Nicolas Schwachtgen
Stébou Mendy

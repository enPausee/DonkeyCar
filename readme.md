Installation of the Donkey-Car project
After cloning or downloading the file, please follow the instructions below
1/Location of the project
  a/ For linux and mac
    Place the project folder in the /var/www/html/
  b/ For windows
    Follow the instructions of xamp and wamp (see the htdoc file)
2/Creation of a virtual host
  a/ For windows
    wamp and xamp allow using a graphical interface to easily create a virtual host
  b/ For linux (https://www.pixel-online.fr/article/208330/comment-ajout-et-supprimer-des-virtuals-hosts-sous-linux/)
    create a virtual host that points to the location defined above (do not forget to specify the / public folder)
    place in etc/apache2/site-available the conf file, example below donkey-car.wip.conf:
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
  For the following commands, you must be in super user mode (sudo)
    1- Give all rights (777) to the donkey-car project
    2- modify /etc/hosts file by adding the following line
      127.0.0.1 donkey-car.wip
    3- Don't forget to register your virtual host and restart the apache server
      sudo a2ensite donkey-car.wip.conf
      sudo service apache2 restart
3/ Create a database then at project level
   create a donkey-car / src / Core / _connect.php file with the following content (you must replace the Xs with your data)
  <? php
  const DB_HOST = 'XXXXX';
  const DB_NAME = 'XXXXX';
  const DB_USER = 'XXXXX';
  const DB_PSWD = 'XXXXX';
4/ In order to fill the database tables, we can rely on php scripts
  a/ open a terminal in the donkey-car folder
  b/ run the following commands
  php sql / createDb.php
  php sql / fillDb.php
5/ At browser level, enter the url of your virtual host
  example: http: //donkey-car.wip/
Contributors:
Matthias Lagrabe
Nicolas Schwachtgen
Stébou Mendy

#!bin/bash

service mysql start;
mysql -u root --skip-password < database.sql;
service php7.3-fpm start;
service nginx start;
bash;
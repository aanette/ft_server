#!bin/bash

if grep -q "autoindex on;" /etc/nginx/sites-available/my_nginx.config;
then 
    sed -i "s/autoindex on;/autoindex off;/" /etc/nginx/sites-available/my_nginx.config;
    echo "state of autoindex is off"

else 
    sed -i "s/autoindex off;/autoindex on;/" /etc/nginx/sites-available/my_nginx.config;
    echo "state of autoindex is on"
fi
nginx -s reload
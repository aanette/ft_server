# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: aanette <aanette@student.21-school.ru>     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/15 16:15:42 by aanette           #+#    #+#              #
#    Updated: 2021/02/25 19:47:51 by aanette          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

EXPOSE 80 443

RUN apt-get update 
RUN apt-get upgrade -y
RUN apt-get install -y vim nginx mariadb-server php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring openssl

ADD https://ru.wordpress.org/latest-ru_RU.tar.gz wordpress.tar
RUN tar -xf wordpress.tar && rm -rf wordpress.tar 

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz phpMyAdmin.tar
RUN tar -xf phpMyAdmin.tar && rm -rf phpMyAdmin.tar && mv phpMyAdmin-5.0.4-english phpMyAdmin

RUN mv wordpress /var/www/html && mv phpMyAdmin /var/www/html

RUN rm -rf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
COPY ./srcs/my_nginx.config /etc/nginx/sites-available/my_nginx.config 
RUN ln -s /etc/nginx/sites-available/my_nginx.config /etc/nginx/sites-enabled/my_nginx.config

COPY ./srcs/wp-config.php /var/www/html/wordpress/wp-config.php
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin/
COPY ./srcs/database.sql ./srcs/autoindex.sh ./srcs/start.sh ./
RUN chmod 777 autoindex.sh 

RUN openssl req -x509 -nodes -newkey rsa:2048 -days 365 \
    -keyout /etc/ssl/nginx-selfsigned.key \
    -out /etc/ssl/nginx-selfsigned.crt \
    -subj "/C=RU/ST=MOSCOW/L=MOSCOW/O=SCHOOL21/CN=aanette"

CMD ["bash", "start.sh"]
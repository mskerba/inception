FROM debian:buster

RUN apt update -y

# RUN apt install software-properties-common -y && apt update -y

RUN apt install php-fpm php-mysql wget -y && mkdir -p /run/php

RUN mkdir -p shared-dat && cd /shared-dat && wget https://wordpress.org/latest.tar.gz && tar -zxvf latest.tar.gz

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY ./wp-config.php /shared-dat/wordpress/wp-config.php



CMD ["bash", "script.sh"]


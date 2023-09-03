FROM debian:buster

RUN apt update -y

# RUN apt install software-properties-common -y && apt update -y

RUN apt install php-fpm php-mysql wget curl -y && mkdir -p /run/php

RUN mkdir -p shard_data && cd /shard_data && wget https://wordpress.org/latest.tar.gz && tar -zxvf latest.tar.gz

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY ./wp-config.php /shard_data/wordpress/wp-config.php

COPY tools/.sh script.sh

CMD ["bash", "script.sh"]


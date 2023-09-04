#!/bin/bash

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
sleep 5
wp option update siteurl "https://mskerba.42.fr" --allow-root
wp option update home "http://mskerba.42.fr" --allow-root
wp core install  --url=https://mskerba.42.fr:8080/ --title=mskerba --admin_user=mskerba --admin_password=mskerba123 --admin_email=monaimskerba@gmail.com --allow-root --path=/shard_data/wordpress/
wp user create $SP_USER $SP_EMAIL --role=subscriber --user_pass=$SP_PASS --path=/shard_data/wordpress  --allow-root


php-fpm7.3 -F
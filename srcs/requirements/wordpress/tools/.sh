#!/bin/bash


curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
sleep 5
wp core install  --url=https://localhost:8080/ --title=mskerba --admin_user=mskerba --admin_email=monaimskerba@gmail.com --allow-root --path=/shared-dat/wordpress/

php-fpm7.3 -F
#!/bin/bash

service mysql start
mysql -e "CREATE DATABASE admin"
mysql -e "CREATE USER 'monaim'@'%' IDENTIFIED BY 'password'"
mysql -e "GRANT ALL PRIVILEGES ON admin.* TO 'monaim'@'%'"
service mysql stop
mysqld_safe
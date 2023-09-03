#!/bin/bash


service mysql start
mysql -e "CREATE DATABASE admin"
mysql -e "CREATE USER 'monaim'@'%' IDENTIFIED BY 'password'"
# mysql -e "GRANTS FOR 'monaim'@'localhost'"
# mysql -e "GRANT USAGE ON *.* TO 'monaim'@'localhost'"
# mysql -e "GRANT SELECT, INSERT, UPDATE, DELETE ON `admin`.* TO 'monaim'@'localhost'"
mysql -e "GRANT ALL PRIVILEGES ON admin.* TO 'monaim'@'%'"
service mysql stop
mysqld_safe
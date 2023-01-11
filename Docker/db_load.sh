#!/bin/bash

DB_ROOT_PASSWORD=Asseco#123
DB_USER=harzypotterzy
DB_PASSWORD=harzypotterzy
DB_NAME=harzypotterzy_db

mysql -p${DB_ROOT_PASSWORD} -e "DROP DATABASE IF EXISTS ${DB_NAME};"
mysql -p${DB_ROOT_PASSWORD} -e "CREATE DATABASE ${DB_NAME};"
mysql -p${DB_ROOT_PASSWORD} -e "USER ${DB_NAME};"
mysql -p${DB_ROOT_PASSWORD} -e "CREATE OR REPLACE USER '${DB_USER}'@localhost IDENTIFIED BY '${DB_PASSWORD}';"
mysql -p${DB_ROOT_PASSWORD} -e "GRANT ALL PRIVILEGES ON '${DB_NAME}'.* TO '${DB_USER}'@localhost;"
mysql -p${DB_ROOT_PASSWORD} -e "FLUSH PRIVILEGES;"

mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} < /tmp/prestashop.sql
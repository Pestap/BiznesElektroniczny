#!/bin/bash

DB_ROOT_PASSWORD=root
DB_USER=harzypotterzy
DB_PASSWORD=harzypotterzy
DB_NAME=harzypotterzy_db
SHOP_URL=localhost:80
SHOP_URL_SSL=localhost:443

mysql -p${DB_ROOT_PASSWORD} -e "DROP DATABASE IF EXISTS ${DB_NAME};"
mysql -p${DB_ROOT_PASSWORD} -e "CREATE DATABASE ${DB_NAME};"
mysql -p${DB_ROOT_PASSWORD} -e "CREATE OR REPLACE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -p${DB_ROOT_PASSWORD} -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%';"
mysql -p${DB_ROOT_PASSWORD} -e "FLUSH PRIVILEGES;"

mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} < /tmp/prestashop.sql

#mysql -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} -e "UPDATE ps_shop_url SET domain='${SHOP_URL}', domain_ssl='${SHOP_URL_SSL}' WHERE id_shop_url=1;"
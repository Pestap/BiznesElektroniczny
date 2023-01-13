#!/bin/bash

docker cp ./prestashop.sql  harzypotterzy_mariadb:/tmp/prestashop.sql
docker cp ./db_load.sh  harzypotterzy_mariadb:/tmp/db_load.sh

docker exec -it harzypotterzy_mariadb chmod 777 //tmp//db_load.sh
docker exec -it harzypotterzy_mariadb chmod 777 //tmp//prestashop.sql

docker exec -it harzypotterzy_mariadb //bin//sh //tmp//db_load.sh
docker exec -it harzypotterzy_mariadb rm //tmp//prestashop.sql
docker exec -it harzypotterzy_mariadb rm //tmp//db_load.sh
sleep 10
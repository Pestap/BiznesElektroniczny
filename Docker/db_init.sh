#!/bin/bash

docker cp ./prestashop.sql  MariaDB:/tmp/prestashop.sql
docker cp ./db_load.sh  MariaDB:/tmp/db_load.sh
docker exec -it MariaDB ./tmp/db_load.sh
docker exec -it MariaDB rm /tmp/prestashop.sql
docker exec -it MariaDB rm /tmp/db_load.sh
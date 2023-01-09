FROM mariadb:10.11-rc

ENV MYSQL_ROOT_PASSWORD Asseco#123
ENV MYSQL_DATABASE prestashop

ADD be_db_export.sql /docker-entrypoint-initdb.d

RUN apt-get update

EXPOSE 3306


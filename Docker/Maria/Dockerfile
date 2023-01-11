FROM mariadb:10.11-rc

ENV MYSQL_ROOT_PASSWORD Asseco#123
ENV MYSQL_DATABASE prestashop

COPY ./prestashop.sql /docker-entrypoint-initdb.d

RUN apt-get update

EXPOSE 3306


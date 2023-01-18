FROM alpine:3.17 as base_layer

RUN apk update
RUN apk add git
RUN git clone --single-branch https://github.com/Pestap/BiznesElektroniczny.git


FROM prestashop/prestashop:8.0.0

RUN rm -rf *

COPY --from=base_layer /BiznesElektroniczny .



RUN mv DEPLOY_CONFIG/a2config.conf /etc/apache2/sites-enabled/000-default.conf
RUN mv DEPLOY_CONFIG/parameters.php ./app/config/parameters.php

#COPY a2config.conf /etc/apache2/sites-enabled/000-default.conf
#COPY parameters.php ./app/config/parameters.php

RUN apt update -y
RUN apt install -y memcached

RUN apt install -y libz-dev libmemcached-dev
RUN pecl install memcached
RUN echo extension=memcached.so >> /usr/local/etc/php/conf.d/memcached.ini

RUN rm -rf DEPLOY_CONFIG

RUN mkdir var/logs

RUN chmod -R 775 .
RUN chown -R www-data:www-data .

RUN rm -rf var/cache/prod/*
RUN a2enmod ssl


EXPOSE 80
EXPOSE 443

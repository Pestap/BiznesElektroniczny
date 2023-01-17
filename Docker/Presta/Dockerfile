FROM alpine:3.17 as base_layer

RUN apk update
RUN apk add git
RUN git clone --single-branch https://github.com/Pestap/BiznesElektroniczny.git


FROM prestashop/prestashop:8.0.0

RUN rm -rf *

COPY --from=base_layer /BiznesElektroniczny .



#RUN mv DEPLOY_CONFIG/a2config.conf /etc/apache2/sites-enabled/000-default.conf
#RUN mv DEPLOY_CONFIG/parameters.php ./app/config/parameters.php

COPY a2config.conf /etc/apache2/sites-enabled/000-default.conf
COPY parameters.php ./app/config/parameters.php


RUN rm -rf DEPLOY_CONFIG

RUN mkdir var/logs

RUN chmod -R 775 .
RUN chown -R www-data:www-data .

RUN rm -rf var/cache/prod/*
RUN a2enmod ssl


EXPOSE 80
EXPOSE 443

FROM alpine:3.17 as base_layer

RUN apk update
RUN apk add git
RUN git clone --single-branch https://github.com/Pestap/BiznesElektroniczny.git


FROM prestashop/prestashop:8.0.0
RUN rm -rf *
COPY --from=base_layer /BiznesElektroniczny .



COPY a2config.conf /etc/apache2/sites-enabled/000-default.conf
COPY parameters.php ./app/config/parameters.php
RUN chmod -R 775 .
RUN chown -R www-data:www-data .

RUN a2enmod ssl

EXPOSE 80
EXPOSE 443

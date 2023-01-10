FROM alpine:3.17 as base_layer

RUN apk update
RUN apk add git
RUN git clone --single-branch https://github.com/Pestap/BiznesElektroniczny.git

RUN mkdir config

WORKDIR /config

RUN git clone -b Scraper https://github.com/Pestap/BiznesElektroniczny.git


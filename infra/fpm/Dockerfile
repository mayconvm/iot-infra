FROM ubuntu:16.04

EXPOSE 80 443

#update
RUN apt-get update -y
#RUN apt-get upgrade && apt-get update -y

#
RUN apt-get install -y expect software-properties-common
COPY /infra/fpm/updatePhp7.1.sh /tmp
RUN chmod +x /tmp/updatePhp7.1.sh && ./tmp/updatePhp7.1.sh && apt-get update

#PHP-FPM
RUN apt-get install -y openssl \
					php7.1-fpm php7.1-commo php7.1-dev \
					php7.1-cli php7.1-mbstring php7.1-curl php7.1-json \
					php7.1-mcrypt php7.1-mysql php7.1-opcache php7.1-zip \
					php7.1-gd php7.1-mysql php7.1-xml php7.1-xsl php7.1-xmlrpc \
					php7.1-intl php7.1-mcrypt php7.1-common   --allow-unauthenticated

# New Add
RUN apt-get install -y inetutils-ping php-redis --allow-unauthenticated

RUN mkdir /run/php

COPY /infra/fpm/template/www.conf /etc/php/7.1/fpm/pool.d/www.conf

ADD infra/fpm/entrypoint.sh /entrypoint.sh
ENTRYPOINT /entrypoint.sh

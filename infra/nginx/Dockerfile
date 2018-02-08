FROM ubuntu:16.04

EXPOSE 80 443

# nginx

#update
RUN apt-get upgrade && apt-get update -y

#nginx
RUN apt-get install -y openssl nginx

COPY infra/nginx/template/iot.conf /etc/nginx/sites-available/default

COPY infra/nginx/data/ssl.crt /etc/ssl/local.iot.crt
COPY infra/nginx/data/ssl.key /etc/ssl/local.iot.key

ADD infra/nginx/entrypoint.sh /entrypoint.sh
ENTRYPOINT /entrypoint.sh

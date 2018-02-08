#!/bin/bash

sleep 1

#nginx
service nginx restart

tail -f /var/log/nginx/error.log \
		/var/log/nginx/access.log \
		/var/log/nginx/local.iot.access.log \
		/var/log/nginx/local.iot.error.log \
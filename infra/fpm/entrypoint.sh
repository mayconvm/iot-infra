#!/bin/bash

sleep 1

#nginx
service php7.1-fpm restart

tail -f /var/log/www.access.log \
		/var/log/php7.1-fpm.log
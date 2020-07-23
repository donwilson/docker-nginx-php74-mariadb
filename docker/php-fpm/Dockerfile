FROM php:7.4-fpm-alpine

RUN { \
	echo 'display_errors = On'; \
	echo 'display_startup_errors = On'; \
	echo 'expose_php = Off'; \
	echo 'upload_max_filesize = 1024M'; \
	echo 'max_file_uploads = 200'; \
	echo 'short_open_tag = On'; \
	echo 'post_max_size = 2048M'; \
	echo 'memory_limit = 256M'; \
	echo 'max_execution_time = 600'; \
	echo 'max_input_vars = 1000'; \
	echo 'max_input_time = 120'; \
	echo 'zlib.output_compression = On'; \
	echo 'date.timezone = America/Chicago'; \
} > /usr/local/etc/php/conf.d/999-recommended.ini

# https://github.com/mlocati/docker-php-extension-installer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN install-php-extensions gd igbinary mcrypt memcache memcached msgpack opcache pdo_mysql zip

CMD ["php-fpm"]

EXPOSE 9000
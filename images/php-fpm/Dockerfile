FROM php:8.0.3-fpm

RUN apt-get update && apt-get install -y \
	nano \
	wget

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd mysqli pdo_mysql opcache imagick exif zip mcrypt pspell redis sockets ssh2 soap

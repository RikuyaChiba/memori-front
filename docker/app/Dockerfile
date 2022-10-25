FROM php:8.0-fpm

RUN set -x \
    && apt-get -y update \
    && apt-get install -y git unzip libzip-dev libicu-dev libonig-dev \ 
    && docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

WORKDIR /app
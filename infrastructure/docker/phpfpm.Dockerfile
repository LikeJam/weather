FROM php:8.3.1-fpm-alpine3.19

RUN apk add --update nodejs npm

RUN docker-php-ext-install pdo_mysql mysqli \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.5.8

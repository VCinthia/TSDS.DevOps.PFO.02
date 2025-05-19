FROM php:8.2-apache

RUN apt-get update \
    && docker-php-ext-install mysqli

COPY . /var/www/html/

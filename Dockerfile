# Imagen base con PHP + Apache
FROM php:8.2-apache

# Instalamos dependencias de sistema y luego mysqli
RUN apt-get update \
    && docker-php-ext-install mysqli

# Copiamos el código al contenedor
COPY . /var/www/html/

FROM php:8.0-apache

RUN apt-get update && apt-get install -y curl \
    && docker-php-ext-install mysqli pdo pdo_mysql


RUN a2enmod rewrite


COPY . /var/www/html/
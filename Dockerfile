FROM php:8.1-apache

RUN rm -frv /var/www/html*

COPY . /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80
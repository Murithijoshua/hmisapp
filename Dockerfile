# Dockerfile
FROM php:8
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /app
COPY . /app
RUN composer install
CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
# author
MAINTAINER Lavatsa Leon
# extra metadata
LABEL version="1.0"
LABEL description="KeHMIS image for access to all CICD server apps."

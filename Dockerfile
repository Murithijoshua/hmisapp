# Dockerfile
FROM php:8.0.20
RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer​ | php -- \
    --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . /app
RUN composer install --no-interaction --optimize-autoloader --no-dev
# Optimizing Configuration loading
RUN php artisan config:cache
# Optimizing Route loading
RUN php artisan route:cache
# Optimizing View loading
RUN php artisan view:cache
RUN php artisan optimize
RUN php artisan migrate:fresh
CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
# author
MAINTAINER Lavatsa Leon
# extra metadata
LABEL version="1.0"
LABEL description="KeHMIS image for access to all CICD server apps."

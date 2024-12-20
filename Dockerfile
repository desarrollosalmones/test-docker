# Use the official PHP image with FPM as base image
FROM php:8.2-fpm

RUN apt-get update \
        && apt-get install -y \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip

RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql mysqli mbstring

WORKDIR /app
COPY composer.json .
RUN composer install --no-scripts
COPY . .

CMD php artisan migrate:fresh --seed

CMD php artisan serve --host=0.0.0.0 --port 80

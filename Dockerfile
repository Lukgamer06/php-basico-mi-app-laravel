FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        curl \
        git \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        unzip \
        zip \
    && docker-php-ext-install pdo_mysql mbstring xml zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Laravel source remains in php-basico; this image only packages it.
COPY php-basico/ ./
RUN composer install --no-interaction --prefer-dist --optimize-autoloader


# ---------- Stage 1 : Build Frontend ----------
FROM node:22 AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ---------- Stage 2 : PHP Runtime ----------
FROM php:8.3-cli

WORKDIR /var/www/html


# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        pgsql \
        zip \
        gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


# Laravel source
COPY . .


# PHP packages
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction


# Vite build
COPY --from=frontend /app/public/build ./public/build


# Permission
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache


COPY entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh


EXPOSE 80


ENTRYPOINT ["/entrypoint.sh"]
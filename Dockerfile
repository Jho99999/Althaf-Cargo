# ---------- Stage 1 : Build Frontend ----------
FROM node:22 AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ---------- Stage 2 : PHP + Apache ----------
FROM php:8.3-apache-bookworm

WORKDIR /var/www/html


# Install system dependencies + PHP extensions
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
        pdo_mysql \
        zip \
        gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# Fix Apache MPM conflict
RUN rm -f /etc/apache2/mods-enabled/mpm_*.load \
    && rm -f /etc/apache2/mods-enabled/mpm_*.conf \
    && a2enmod mpm_prefork \
    && a2enmod rewrite


# Check active MPM (should show only mpm_prefork)
RUN apache2ctl -M | grep mpm


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


# Copy Laravel project
COPY . .


# Install Laravel dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction


# Copy Vite build
COPY --from=frontend /app/public/build ./public/build


# Apache DocumentRoot -> Laravel public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri \
    -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf


# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache


# Apache ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


# Entrypoint
COPY entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh


EXPOSE 80


ENTRYPOINT ["/entrypoint.sh"]
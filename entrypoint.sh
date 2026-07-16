#!/bin/bash
set -e

mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache


php artisan optimize:clear

php artisan migrate --force


if [ ! -L public/storage ]; then
    php artisan storage:link
fi


exec apache2-foreground
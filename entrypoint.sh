#!/bin/bash
set -e

mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "===== DATABASE ENV ====="
printenv | grep DB_
echo "========================"

php artisan migrate --force

php artisan storage:link || true

exec apache2-foreground
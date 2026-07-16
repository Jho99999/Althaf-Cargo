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
printenv | grep PG
echo "========================"

php artisan migrate --force

php artisan storage:link || true

# --- FIX: paksa cuma mpm_prefork yang aktif (wajib buat mod_php),
# karena Railway sering ninggalin mpm_event/mpm_worker tetap nyala bareng prefork.
a2dismod mpm_event mpm_worker >/dev/null 2>&1 || true
rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.* 2>/dev/null || true
a2enmod mpm_prefork >/dev/null 2>&1 || true

echo "PORT=$PORT"

if [ -n "$PORT" ]; then
    sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

    sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" \
        /etc/apache2/sites-available/000-default.conf
fi

apache2ctl -S

exec apache2-foreground
#!/bin/bash
set -ex

echo "START"

pwd
ls -la

echo "DATABASE"
printenv | grep DB_ || true

echo "APP"
printenv | grep APP_ || true

echo "PHP"
php -v

echo "ARTISAN"
php artisan --version

echo "CLEAR"
php artisan optimize:clear

echo "MIGRATE"
php artisan migrate --force

echo "STORAGE"
php artisan storage:link || true

echo "APACHE"

a2dismod mpm_event >/dev/null 2>&1 || true
a2dismod mpm_worker >/dev/null 2>&1 || true

rm -f /etc/apache2/mods-enabled/mpm_event.*
rm -f /etc/apache2/mods-enabled/mpm_worker.*

a2enmod mpm_prefork >/dev/null 2>&1 || true

apachectl configtest

exec apache2-foreground

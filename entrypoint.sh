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
exec apache2-foreground
#!/bin/bash
set -e

php artisan config:clear
php artisan cache:clear

php artisan migrate --force

php artisan storage:link || true

exec apache2-foreground
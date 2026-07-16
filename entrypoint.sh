#!/bin/bash
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link --force
apache2-foreground
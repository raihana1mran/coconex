#!/bin/bash

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

php artisan config:clear
php artisan cache:clear
php artisan package:discover --no-ansi

exec "$@"
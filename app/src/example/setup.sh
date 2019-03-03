#!/bin/ash
cd /var/www/example
cp .env.example .env
php artisan key:generate
/bin/composer install
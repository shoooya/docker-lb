#!/bin/ash
cd /var/www/example
cp .env.example .env
php artisan key:generate
/bin/composer install
php artisan migrate
php artisan db:seed --class=ExampleTableSeeder
chmod -R 777 storage/

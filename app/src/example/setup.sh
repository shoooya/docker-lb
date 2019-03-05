#!/bin/ash
echo 'change directory'
cd /var/www/example
pwd
echo 'create .env'
cp .env.example .env
echo 'run composer'
/bin/composer install
echo 'key generate'
php artisan key:generate
echo 'run migration'
php artisan migrate
echo 'run seeding'
php artisan db:seed --class=ExampleTableSeeder
echo 'change permission'
chmod -R 777 storage/
echo 'done'
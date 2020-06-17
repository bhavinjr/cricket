#!/bin/sh

set -eo pipefail

echo "Installing dependencies"
composer install

echo "Putting the application into Maintenance Mode"
php artisan down

php artisan config:cache
php artisan key:generate
php artisan config:cache
php artisan storage:link
php artisan migrate
php artisan db:seed
php artisan up
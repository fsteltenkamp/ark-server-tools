#!/bin/bash

cd /app
rm -rf vendor node_modules
composer install --no-dev --optimize-autoloader
npm install
npm run build

if [ ! -f .env ]; then
    cp .env.example .env
fi

if [ -f artisan ]; then
    php artisan key:generate
    php artisan migrate
fi
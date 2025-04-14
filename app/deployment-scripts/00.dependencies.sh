#!/bin/bash

cd /app

echo "================================================"
echo "         Removing vendor and node_modules"
rm -rf vendor node_modules
echo "================================================"

echo "            Installing dependencies"
composer install --no-dev --optimize-autoloader
npm install
npm run build
echo "================================================"

if [ ! -f .env ]; then
    echo "          Creating .env file"
    cp .env.example .env
    echo "==============================================="
fi

if [ -f artisan ]; then
    echo "        Running Laravel Setup Commands"
    php artisan key:generate
    php artisan migrate
    echo "==============================================="
fi
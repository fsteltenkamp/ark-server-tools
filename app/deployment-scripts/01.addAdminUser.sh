#!/bin/bash

cd /app

echo "Adding admin user to the database (If not already present)..."

php artisan user:create-admin
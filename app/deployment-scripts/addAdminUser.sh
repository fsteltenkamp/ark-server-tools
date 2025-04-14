#!/bin/bash

echo "Adding admin user to the database (If not already present)..."

php artisan db:seed --class=AdminUserSeeder
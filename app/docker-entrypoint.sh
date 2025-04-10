#!/bin/bash

ls /docker-entrypoint-init.d/ > /dev/null
for file in /docker-entrypoint-init.d/*; do
    if [ -f "$file" ]; then
        echo "Running $file"
        chmod +x "$file"  # Ensure the file is executable
        "$file"           # Execute the file directly
    fi
done

# start caddy
echo "Starting Caddy server..."
exec docker-php-entrypoint "$@"
#!/bin/bash

ls /docker-entrypoint-init.d/ > /dev/null
for file in /docker-entrypoint-init.d/*; do
    if [ -f "$file" ]; then
        echo "Running $file"
        chmod +x "$file"  # Ensure the file is executable
        "$file"           # Execute the file directly
        # wait until the file is finished
        while [ -d /proc/$(pgrep -f "$file") ]; do
            sleep 1
        done
    fi
done
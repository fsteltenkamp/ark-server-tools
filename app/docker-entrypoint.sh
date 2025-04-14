#!/bin/bash

ls /docker-entrypoint-init.d/ > /dev/null
for file in /docker-entrypoint-init.d/*; do
    if [ -f "$file" ]; then
        # get only the file name without path:
        filename=$(basename "$file")
        echo "Running $filename"
        # Ensure the file is executable
        chmod +x "$file"
        # make logs directory:
        mkdir -p /docker-entrypoint-init.logs/"$filename"
        # Execute the file directly
        "$file" > /docker-entrypoint-init.logs/"$filename"/$(date "+%Y%m%d-%H%M%S").log
        # wait until the file is finished
        while [ -d /proc/$(pgrep -f "$file") ]; do
            echo "."
            sleep 1
        done
    fi
done
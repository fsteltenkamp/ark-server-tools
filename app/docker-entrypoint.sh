#!/bin/bash

ls /docker-entrypoint-init.d/ > /dev/null
for file in /docker-entrypoint-init.d/*; do
    if [ -f "$file" ]; then
        # get the filename without the path
        filename=$(basename "$file")
        echo "Running $filename"
        # make sure the file is executable
        chmod +x "$file"
        # create a directory for the logs if it doesn't exist
        mkdir -p /docker-entrypoint-init.logs/"$filename"
        # create a marker file to indicate that the script is running
        marker_file="/docker-entrypoint-init.workdir/running-$filename"
        touch "$marker_file"
        # run the script in the background and redirect output to a log file
        "$file" > /docker-entrypoint-init.logs/"$filename"/$(date "+%Y%m%d-%H%M%S").log &
        # get the PID of the last background command
        pid=$!
        # wait for the script to finish
        wait $pid
        # remove the marker file
        rm -f "$marker_file"
        # check the exit status of the script
        if [ $? -eq 0 ]; then
            echo "$filename completed successfully."
        else
            echo "$filename failed with exit code $?."
        fi
    fi
done

# run the main command
echo "Starting Caddy server..."
exec frankenphp run --config /etc/caddy/Caddyfile "$@"
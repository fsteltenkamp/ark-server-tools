ls /docker-entrypoint-init.d/ > /dev/null
for file in /docker-entrypoint-init.d/*; do
    echo "Running $file"
    sh $file
done
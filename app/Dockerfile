FROM dunglas/frankenphp:php8.4

# create directories
RUN mkdir -p /docker-entrypoint-init.d

# Copy files
COPY ./src /app
COPY ./Caddyfile /etc/caddy/Caddyfile
COPY ./docker-entrypoint.sh /usr/local/bin/docker-entrypoint
COPY ./deployment-scripts/* /docker-entrypoint-init.d/

# install composer:
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Production:
RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

# File Permissions
RUN chmod +x /docker-entrypoint-init.d/*
RUN chmod +x /usr/local/bin/docker-entrypoint

# Start Entrypoint Script
ENTRYPOINT ["docker-entrypoint"]
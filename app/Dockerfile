FROM dunglas/frankenphp:php8.4

COPY ./src /app
COPY ./Caddyfile /etc/caddy/Caddyfile
COPY ./deployment-scripts /deployment-scripts

# install composer:
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Production:
RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

# Deployment Scripts
ENTRYPOINT "/deployment-scripts/dependencies.sh && docker-php-entrypoint"
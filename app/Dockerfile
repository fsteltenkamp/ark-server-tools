FROM dunglas/frankenphp:php8.4

COPY ./src /app
COPY ./Caddyfile /etc/caddy/Caddyfile

# Production:
RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
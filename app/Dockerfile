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

# Install additional Packages:
RUN apt-get update && \
    apt-get -y --no-install-recommends install \
        git \
        zip \
        unzip \
        procps \
    && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install Nodejs
RUN curl -sL https://deb.nodesource.com/setup_22.x | bash - && \
	apt-get install -y nodejs

# Install PHP Extensions
RUN install-php-extensions \
	pdo_mysql \
	gd \
	intl \
	zip \
	redis

# Production:
RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

# File Permissions
RUN chmod +x /docker-entrypoint-init.d/*
RUN chmod +x /usr/local/bin/docker-entrypoint

# Start Entrypoint Script
ENTRYPOINT ["docker-entrypoint"]
#!/bin/bash

echo "Starting Caddy server..."
exec frankenphp run --config /etc/caddy/Caddyfile "$@"
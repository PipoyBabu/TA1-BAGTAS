#!/bin/sh
set -eu

render_port="${PORT:-10000}"

sed -ri "s/^Listen [0-9]+/Listen ${render_port}/" /etc/apache2/ports.conf
sed -ri "s/<VirtualHost \*:[0-9]+>/<VirtualHost *:${render_port}>/" /etc/apache2/sites-available/000-default.conf

exec apache2-foreground

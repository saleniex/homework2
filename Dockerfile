ARG PHP_VERSION=8.1

FROM php:${PHP_VERSION}-fpm-alpine

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /srv/app/

RUN chown -R www-data:www-data /srv/app

COPY . .

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

ENTRYPOINT ["docker-entrypoint"]

CMD ["php-fpm"]

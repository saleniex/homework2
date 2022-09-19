ARG COMPOSER_VERSION=2.4
ARG PHP_VERSION=8.1

#
# Composer Stage
#
FROM composer:${COMPOSER_VERSION} as vendor

COPY composer.json composer.json

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist
	
RUN composer dump-autoload	

#
# PHP Application
#
FROM php:${PHP_VERSION}-apache


ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html

COPY --from=vendor /app/vendor/ /var/www/html/vendor/



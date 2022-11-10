FROM php:8.0

RUN apt-get update -y \
    && apt-get install -y libmcrypt-dev \
    libonig-dev \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

RUN composer install

COPY . .

EXPOSE 8000
CMD php -S 0.0.0.0:8000 -t public

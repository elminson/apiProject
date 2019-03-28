FROM php:7.1-fpm

RUN curl -sS https://getcomposer.org/installer | php \
    && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    git \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql mbstring zip

COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader
RUN composer update
RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan key:generate
RUN php artisan migrate
RUN php artisan db:seed

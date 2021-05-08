FROM php:apache

COPY --from=mlocati/php-extension-installer:1.2.25 /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo_mysql zip xdebug @composer

WORKDIR /var/www
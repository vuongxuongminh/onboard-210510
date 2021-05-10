FROM php:apache

ARG DEBIAN_FRONTEND=noninteractive

RUN set -e; \
    apt-get update && apt-get -yq install git;

COPY --from=mlocati/php-extension-installer:1.2.25 /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo_mysql zip xdebug @composer

WORKDIR /var/www
# PHP 8.3.36 fixes CVE-2026-109618 and CVE-2026-109619.
FROM php:8.3.36-apache

# Herramientas y headers para compilar extensiones PHP
RUN apt-get update && apt-get install -y --no-install-recommends \
      git zip unzip pkg-config autoconf make g++ \
      libicu-dev libzip-dev libonig-dev \
  && docker-php-ext-configure intl \
  && docker-php-ext-configure zip \
  && docker-php-ext-install -j"$(nproc)" intl mbstring zip pdo pdo_mysql opcache \
  && a2enmod rewrite \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# (Opcional) Si tu docroot es public/, descomenta:
# RUN sed -ri 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' /etc/apache2/sites-available/000-default.conf \
#  && sed -ri 's#<Directory /var/www/html/>#<Directory /var/www/html/public/>#' /etc/apache2/apache2.conf \
#  && sed -ri 's/AllowOverride None/AllowOverride All/i' /etc/apache2/apache2.conf

# =========================================================
# DIABOSS GROUPE — Laravel 13 | PHP 8.4 | Apache
# =========================================================

FROM php:8.4-apache

# ---------- Dépendances système ----------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    default-mysql-client \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip \
        intl \
        mbstring \
        bcmath \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# ---------- Composer ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- Apache ----------
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# ---------- Laravel ----------
WORKDIR /var/www/html

# Copier tout le projet AVANT composer install
COPY . .

# ---------- Composer ----------
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --optimize-autoloader

# ---------- Permissions ----------
RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ---------- Optimisation ----------
RUN php artisan config:clear || true && \
    php artisan route:clear || true && \
    php artisan view:clear || true

# ---------- Port Render ----------
EXPOSE 10000

CMD ["sh", "-c", "sed -i \"s/Listen 80/Listen ${PORT:-10000}/\" /etc/apache2/ports.conf && sed -i \"s/<VirtualHost \\*:80>/<VirtualHost *:${PORT:-10000}>/\" /etc/apache2/sites-available/000-default.conf && apache2-foreground"]
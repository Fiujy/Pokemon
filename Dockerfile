# Dockerfile
FROM php:8.3-cli

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurer Symfony
WORKDIR /var/www/symfony
COPY . .
RUN composer install

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]

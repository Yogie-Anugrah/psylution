# Gunakan image PHP dengan FPM
FROM php:8.2-fpm

# Set direktori kerja
# WORKDIR /var/www
WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN php --version

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN apt-get update && apt-get install -y curl zip unzip git
# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy seluruh Laravel project ke dalam container
COPY . .

# Install Laravel dependencies
RUN composer self-update && composer clear-cache
RUN rm -rf vendor composer.lock
# RUN composer install --no-dev --optimize-autoloader
RUN composer self-update && composer install --no-dev --optimize-autoloader

# Set izin storage dan cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
# CMD ["php-fpm"]
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]

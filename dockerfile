# Gunakan PHP-FPM sebagai backend Laravel
FROM php:8.2-fpm

# Set direktori kerja
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies PHP dan sistem
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copy seluruh Laravel project ke dalam container
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set izin storage dan cache
RUN chmod -R 775 storage bootstrap/cache

# Konfigurasi Nginx untuk Laravel
RUN echo 'server { \
    listen 8000; \
    server_name localhost; \
    root /var/www/html/public; \
    index index.php index.html index.htm; \
    location / { \
        try_files $uri $uri/ /index.php?$query_string; \
    } \
    location ~ \.php$ { \
        include fastcgi_params; \
        fastcgi_pass 127.0.0.1:9000; \
        fastcgi_index index.php; \
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; \
    } \
}' > /etc/nginx/sites-available/default

# Expose port 8000 untuk Nginx
EXPOSE 8000

# Jalankan Nginx dan PHP-FPM secara bersamaan
CMD ["sh", "-c", "service nginx start && php-fpm"]

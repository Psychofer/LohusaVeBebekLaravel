FROM php:8.2-fpm

# Sistem paketlerini yükle
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libicu-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip intl mbstring

# Composer yükle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizini
WORKDIR /var/www
COPY . .

# Storage ve cache izinleri
RUN chmod -R 775 storage bootstrap/cache

# Composer bağımlılıkları
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Migration’ları çalıştır
RUN php artisan migrate --force || true

# Port ayarı
EXPOSE 8080

# Start komutu
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}



FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev \
    zip unzip sqlite3 libsqlite3-dev

RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . /var/www

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 755 /var/www/storage /var/www/bootstrap/cache

RUN touch /var/www/database/database.sqlite && \
    chmod 664 /var/www/database/database.sqlite

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
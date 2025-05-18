FROM docker.arvancloud.ir/php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=docker.arvancloud.ir/composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/laravel

COPY . .

# نصب وابستگی‌های Laravel
RUN composer install --no-dev --optimize-autoloader

# تنظیم پرمیژن‌ها
RUN chown -R www-data:www-data /var/www/laravel/storage /var/www/laravel/bootstrap/cache

CMD ["php-fpm"]

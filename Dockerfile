# Sử dụng image PHP có sẵn với Composer
FROM php:8.2-fpm

# Cài đặt các thư viện cần thiết
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring exif pcntl bcmath xml

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy mã nguồn Laravel vào container
WORKDIR /var/www/html
COPY . .

# Cài đặt các package PHP và Laravel
RUN composer install --no-dev --optimize-autoloader

# Cấp quyền cho storage và bootstrap
RUN chmod -R 777 storage bootstrap/cache

# Cấu hình PHP
COPY ./.docker/php.ini /usr/local/etc/php/php.ini

# Mở cổng 8000
EXPOSE 8000

# Lệnh khởi chạy container
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

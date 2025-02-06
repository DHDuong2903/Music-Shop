# Sử dụng PHP 8.2 với Nginx
FROM php:8.2-fpm

# Cài đặt các dependencies cần thiết
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Sao chép toàn bộ mã nguồn vào container
COPY . .

# Cài đặt Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Thiết lập quyền cho storage & bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Copy file config Nginx
COPY .docker/nginx/default.conf /etc/nginx/sites-available/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Mở port 80
EXPOSE 80

# Lệnh chạy PHP-FPM và Nginx
CMD ["sh", "-c", "nginx -g 'daemon off;' & php-fpm"]

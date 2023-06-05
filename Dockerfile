FROM php:7.4-fpm

ENV COMPOSER_ALLOW_SUPERUSER=1

# Instala las dependencias necesarias para Composer y Nginx
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    nginx

# Configura Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Descarga e instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configura el directorio de trabajo y copia los archivos de tu proyecto
WORKDIR /var/www/html
COPY . .

# Instala las dependencias de tu proyecto usando Composer
RUN composer install --optimize-autoloader --no-dev && \
    composer require doctrine/dbal && \
    # Genera una llave para Laravel
    php artisan key:generate


# Expone el puerto 80 para el servidor Nginx
EXPOSE 8000

# Inicia los servicios de Nginx y PHP-FPM
# CMD php-fpm && nginx -g "daemon off;"
WORKDIR /var/www/html/tfg-asir
CMD php artisan serve --host=0.0.0.0
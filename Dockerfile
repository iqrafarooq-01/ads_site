FROM php:7.3-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid
# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
RUN curl -sS https://getcomposer.org/installer | php -- --version=2.0.9 --install-dir=/usr/local/bin --filename=composer

# Create system user to run Composer and Artisan Commands
#RUN useradd -G www-data,root -u $uid -d /home/$user $user
#RUN mkdir -p /home/$user/.composer && \
#    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www
EXPOSE 8010

# CMD [ "sh", "-c", "composer install;php artisan key:generate; php artisan migrate; php artisan serve --port 8010" ]
CMD [ "sh", "-c", "php artisan key:generate; php artisan migrate; php artisan serve --host 0.0.0.0 --port 8010" ]
#USER $user
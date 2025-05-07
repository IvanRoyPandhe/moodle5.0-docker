FROM php:8.2-apache

# Install required packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libxml2-dev \
    libxslt1-dev \
    libpq-dev \
    libsqlite3-dev \
    default-mysql-client \
    git \
    unzip \
    libonig-dev \
    libcurl4-openssl-dev \
    libsodium-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    intl \
    mysqli \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    zip \
    soap \
    xsl \
    opcache \
    exif \
    gd \
    sodium \
    pgsql

# Install PostgreSQL client
RUN apt-get update && apt-get install -y postgresql-client && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure PHP
RUN { \
    echo 'max_execution_time = 300'; \
    echo 'memory_limit = 512M'; \
    echo 'post_max_size = 100M'; \
    echo 'upload_max_filesize = 100M'; \
    echo 'max_input_vars = 5000'; \
    } > /usr/local/etc/php/conf.d/moodle.ini

# Configure Apache
RUN a2enmod rewrite ssl

# Set working directory
WORKDIR /var/www/html

# Copy Moodle files
COPY moodle/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Create moodledata directory
RUN mkdir -p /var/www/moodledata && \
    chown -R www-data:www-data /var/www/moodledata && \
    chmod 777 /var/www/moodledata

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
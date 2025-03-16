FROM php:8.2-cli

# Install dependencies for PHP Zip extension and Git
RUN apt-get update && \
    apt-get install -y libzip-dev git unzip && \
    docker-php-ext-install zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# Copy the application files to the container
COPY . /app

# Run Composer install to install PHP dependencies
RUN composer install

# Set the default command to run PHP interactive mode
CMD ["php", "-a"]

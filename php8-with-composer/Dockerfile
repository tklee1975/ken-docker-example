# inherit from php8 with apache 
FROM php:8.0-apache

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Install Zip (Some packages require it)
# Install unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip



# change the workdir to the html root 
WORKDIR /var/www/html

# Copy the index.php to to the work dir 
COPY src/ .

# Install the composer packaged needed by the application
# RUN composer install

# Open the 80 port 
EXPOSE 80

# Run the startup script
ENTRYPOINT ["bash", "./startup.sh"]

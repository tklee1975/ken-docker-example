# inherit from php8 with apache 
FROM php:8.0-apache

# change the workdir to the html root 
WORKDIR /var/www/html/web

# Copy the index.php to to the work dir 
COPY src/ ./

# Open the 80 port 
EXPOSE 8888


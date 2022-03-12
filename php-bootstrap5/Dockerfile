# inherit from php8 with apache 
FROM php:8.0-apache

RUN apt update && apt-get install -y \
    nodejs \
    npm \ 
    vim

# change the workdir to the html root 
WORKDIR /var/www/html

RUN npm install --global gulp-cli

# Copy the index.php to to the work dir 
COPY src/dist ./dist
COPY src/*.php ./

# Open the 80 port 
EXPOSE 80


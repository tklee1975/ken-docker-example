Apache PHP with composer installed
-----------------------------------------

## Reference 
- https://getcomposer.org/
- https://fakerphp.github.io/
- https://stackoverflow.com/questions/51443557/how-to-install-php-composer-inside-a-docker-container

## Build the image 
docker build -t my-php-site:latest .

composer require fakerphp/faker

## Run the image 
docker run -d -p 8881:80 my-php-site:latest



docker run -d -p 8882:80 -v `pwd`:/var/www/html php:80-apache


## 
```
# Install Wget 
apt-get update
&& apt-get install -y wget \
  && rm -rf /var/lib/apt/lists/*

  # Install Composer 
  wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet
mv composer.phar /usr/local/bin/composer
```

https://stackoverflow.com/questions/41274829/php-error-the-zip-extension-and-unzip-command-are-both-missing-skipping



apt-get update && apt-get install -y zlib1g-dev libzip-dev unzip

composer require fakerphp/faker
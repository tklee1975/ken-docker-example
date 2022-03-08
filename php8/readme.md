## Reference 
https://www.cloudsavvyit.com/10528/how-to-use-docker-to-containerise-php-and-apache/
https://hackmd.io/@titangene/docker-lamp


## Build the image 
docker build -t my-php-site:latest .


## Run the image 
docker run -d -p 8881:80 my-php-site:latest



docker run -d -p 8882:80 -v `pwd`:/var/www/html php:80-apache
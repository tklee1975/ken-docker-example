#!/bin/sh 

## Running a docker using the raw image from dockerhub 
# docker run -d -p 8882:80 -v `pwd`:/var/www/html php:8.0-apache
# docker run -d -p 8882:80 php:8.0-apache

docker run -d node -it
#!/bin/sh 

IMAGE_NAME=ci3-php-site
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

TEST_PORT=8882

SRC_PATH=`pwd`/src

docker run -d -p $TEST_PORT:80 -v $SRC_PATH:/var/www/html/web $IMAGE_ID
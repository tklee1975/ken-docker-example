#!/bin/sh 

IMAGE_NAME=ci3-php-site
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

docker build -t $IMAGE_ID .

TEST_PORT=8882

docker run -d -p $TEST_PORT:80 $IMAGE_ID
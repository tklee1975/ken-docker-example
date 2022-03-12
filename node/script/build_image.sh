#!/bin/sh 

IMAGE_NAME=kencoder-php-site
IMAGE_VERSION=2.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

docker build -t $IMAGE_ID .
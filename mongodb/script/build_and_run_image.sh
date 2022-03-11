#!/bin/sh 

IMAGE_NAME=kencoder-mongodb
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

docker build -t $IMAGE_ID .

TEST_PORT=127017

docker run -d -p $TEST_PORT:27017 $IMAGE_ID
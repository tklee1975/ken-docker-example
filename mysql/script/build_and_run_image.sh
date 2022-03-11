#!/bin/sh 

IMAGE_NAME=kencoder-mysql
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

docker build -t $IMAGE_ID .

TEST_PORT=3336

docker run -d -p $TEST_PORT:3306 $IMAGE_ID 
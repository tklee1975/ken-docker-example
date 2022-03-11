#!/bin/sh 

IMAGE_NAME=kencoder-mongodb
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

docker build -t $IMAGE_ID .
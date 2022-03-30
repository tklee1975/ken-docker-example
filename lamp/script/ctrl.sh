#!/bin/sh 

IMAGE_NAME=lamp-demo
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

TEST_PORT=8881
SRC_PATH=`pwd`/src 

# echo "Count $#"
# Change the argument 1 as '--error' if no argument found'
test $# = 0 && exec /bin/sh "$0" --error

# echo "Count $# $1"
case "$1" in
    --error)
        /bin/sh "$0" help 1>&2
        exit 1
        ;;
    build) 
        echo "Build Docker Image"
        docker build -t $IMAGE_ID .
        ;;
    start) 
        echo "Run Docker Image"
        docker run -d -p $TEST_PORT:80  $IMAGE_ID
        echo "server start at http://localhost:$TEST_PORT "
        ;;
    dev) 
        echo "Run Docker Image in Dev Mode (Mounted source)"
        docker run -d -p $TEST_PORT:80 -v $SRC_PATH:/var/www/html $IMAGE_ID
        echo "server start at http://localhost:$TEST_PORT "
        ;;
    help) 
          cat <<ENDHELP
Usage: ${0} [options]

Options:
  build             Build Docker Image 
  run               Run Docker Image 
  dev               Run Docker Image with volume mount 

ENDHELP
        ;;
    *)
        echo "Your Input: [$1]"
        ;;
esac 



IMAGE_NAME=kencoder-php-site
IMAGE_VERSION=2.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

TEST_PORT=8882

SRC_PATH=`pwd`/src 

echo $SRC_PATH
docker run -d -p $TEST_PORT:80 -v $SRC_PATH:/var/www/html $IMAGE_ID
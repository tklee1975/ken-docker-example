

IMAGE_NAME=kencoder-mysql
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

TEST_PORT=3336

docker run -d -p $TEST_PORT:3306 -e MYSQL_ROOT_PASSWORD=123456 $IMAGE_ID 
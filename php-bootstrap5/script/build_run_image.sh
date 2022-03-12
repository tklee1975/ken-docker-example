


IMAGE_NAME=php-bootstrap5
IMAGE_VERSION=1.0
IMAGE_ID="$IMAGE_NAME:$IMAGE_VERSION"

TEST_PORT=8881

#SRC_PATH=`pwd`/src 
#echo $SRC_PATH
docker build -t $IMAGE_ID .

# if wanna to use local src 
#docker run -d -p $TEST_PORT:80 -v $SRC_PATH:/usr/local/apache2/htdocs $IMAGE_ID

# use the image built
# docker run -d -p $TEST_PORT:80 $IMAGE_ID
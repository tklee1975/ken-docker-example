
## Reference 
https://hub.docker.com/_/alpine

## Run Directly 
```
docker run -it -v `pwd`/src:/usr/local/bin alpine:3.14 
```

## Build Image 
docker build -t hello-alpine:1.0 .

## Run Image 
docker run  hello-alpine:1.0

## Share Image 
```sh
docker push kencoderhk/hello-alpine:1.0
```

docker tag hello-alpine:1.0 kencoderhk/hello-alpine:1.0

```
>> An image does not exist locally with the tag: kencoderhk/hello-alpine
```

```
The push refers to repository [docker.io/kencoderhk/hello-alpine]
d6acb8f7dd27: Preparing 
04f7d134028a: Preparing 
0eb7f19227b9: Preparing 
8d3ac3489996: Preparing 
denied: requested access to the resource is denied
```

```
The push refers to repository [docker.io/kencoderhk/hello-alpine]
d6acb8f7dd27: Pushed 
04f7d134028a: Pushed 
0eb7f19227b9: Pushed 
8d3ac3489996: Mounted from library/alpine 
1.0: digest: sha256:fe6cf5bfabf25090d20a11e067ebfcf8faf3f49b5f85a57cdb8f184e3dd01285 size: 1149
```

## Next version 

docker build -t hello-alpine:2.0 .
docker tag hello-alpine:2.0 kencoderhk/hello-alpine:2.0
docker push kencoderhk/hello-alpine:2.0

## 
docker run kencoderhk/hello-alpine:1.0 
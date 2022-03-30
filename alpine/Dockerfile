# Base on alpine OS 
FROM alpine:latest 

# 
WORKDIR /user/local/bin 

RUN echo "echo \"Hello Alpine  `date`\"" > ./hello.sh 
RUN chmod u+x *.sh

# Run the command 
ENTRYPOINT ["sh", "./hello.sh"]

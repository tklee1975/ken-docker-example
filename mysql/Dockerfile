# inherit from php8 with apache 
FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD 123456 

ADD schema.sql /docker-entrypoint-initdb.d


# Open the 3306 port 
EXPOSE 3306


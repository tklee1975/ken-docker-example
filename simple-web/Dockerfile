#1 Base from httpd 
FROM httpd:latest

#2 Change the workdir to the html root
WORKDIR /usr/local/apache2/htdocs

#3 Modify the index.html 
#RUN echo "<h1>Hello Docker</h1>" > index.html

#3 copy the content 
COPY ./src ./


#4 Export port 80
EXPOSE 80

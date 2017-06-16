FROM php:7-apache
COPY src/ /var/www/html/
RUN apt-get update && apt-get install -y redis-server
service redis-server start
EXPOSE 80 6379

## Docker PHP-Apache Test

### Usage

Docker Setup
```
docker build -t my-php-app .
sh start.sh
```
Installing Dependencies
```
cd src
composer install
```
Preview Url
````
http://docker-machine-ip:80

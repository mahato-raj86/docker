ref : https://hub.docker.com/_/php

Creating an environment  with php - apache - mysql
>>>>>>>>
Create a Dockerfile in your PHP project
FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./your-script.php" ]
Then, run the commands to build and run the Docker image:

$ docker build -t my-php-app .
$ docker run -it --rm --name my-running-app my-php-app
>>>>>>

For showing this in browser we need apache or nginx

Apache without a Dockerfile
$ docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache

stoping docker 
docker stop $(docker ps -a -q)

>>>>>>
via docker-compose.yml
docker-compose up -d
docker-compose down [Whenever we are making changes to docker-compose file we need to down the server]
>>>>>>


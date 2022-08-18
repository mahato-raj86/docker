# docker

To make the changes persistence as shutting down docker-compose removes the instance 
so need to copy the config file.

docker cp wordpress-setup_raj86_wordpress_1:var/www/html/wp-config.php ~/mahato-raj86/Docker/docker/wordpress-setup/config


if we make changes to docker file we need to run 
docker-compose up --build

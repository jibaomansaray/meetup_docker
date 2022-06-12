# Introduction to docker compose
Docker compose allows us to consolidate multiple docker images.
It makes it easy to manager volumes and network. 

You can use docker-compose for development and deployment

## Configurations
Configurations are stored in the `docker-compose.yml` file

## Building your images
Instead of `docker pull` we use `docker-compose build [the name of the image]`
 - `docker-compose build` : build all images in the configuration file
 - `docker-compose build foo` : build the image called `foo` in the configuration

 ## Running containers
Instead of `docker run` we use `docker-compose up [the name of the image]`

 - `docker-compose up` : run all containers
 - `docker-compose up foo` : run the container called `foo`


## Helpful command

 - `docker-compose exec [container name] [command]` : run a command in a container

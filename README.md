# ft_server
This is a student project for 42 São Paulo. The objective is to set up a NGINX web server on a Docker container, running a Wordpress website and a SQL database managed through phpMyAdmin. All of those services must interact smoothly with each other.

# How to run it:

To create an image from the Dockerfile, while inside the main ft_server folder, enter **docker build -t image_name .**

To start your container, enter **docker run --name container_name -it -p 80:80 -p 443:443 image_name**

To turn AutoIndex on or off, while inside the container, enter **bash root/autoindex.sh**

To access the website, go to localhost (or 127.0.0.1) on your browser.

# Other useful commands:

**docker container ps -a**
Lists all containers.

**docker image**
Lists all images.

**docker rm container_name**
Removes container.

**docker rm $(docker ps -aq)**
Removes all existing containers.

**docker rmi image_name**
Removes image.

**docker rmi $(docker images -q)**
Removes all existing images.

**docker start/stop container_name**
Turns container on or off.

**docker attach container_name**
Enters container.

While inside the container:

**CTRL + D**
Exits and stops the container.

**CTRL + P, CTRL + Q**
Exits container and keeps it running.

# Work history:
July 24th 2020 - Initial setup and tests. There's some kind of error on the PHP configuration that we haven't found it. No autoindex yet.

July 25th 2020 - Fixed database setup script, server is working now when an image is created from the Dockerfile.

July 28th 2020 - Autoindex works. Server seems to be running smoothly.

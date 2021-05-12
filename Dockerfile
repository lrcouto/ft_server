# Uses Debian Buster image from Dockerhub as a base.
FROM debian:buster

# Updates Debian Buster.
RUN apt-get update -y && apt-get upgrade -y

# Copy source files to the root of the container.
COPY srcs /root/

# Server setup.
RUN bash /root/setup.sh

# Expose network ports that are going to be used.
EXPOSE 80/tcp
EXPOSE 80/udp

EXPOSE 443/tcp
EXPOSE 443/udp

# Start services.
ENTRYPOINT bash /root/start.sh

# Keeps container running
CMD tail -f /dev/null

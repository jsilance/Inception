FROM debian:buster-20230725

COPY . /app

WORKDIR /app

RUN apt-get update && apt-get install -y mariadb-server

# CMD sh /app/srcs/docker_entrypoint.sh

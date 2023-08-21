FROM debian:buster-20230725

COPY . /app

WORKDIR /app

EXPOSE 443

RUN apt-get update && apt-get install -y nginx

RUN cp -r ./nginx.conf /etc/nginx/nginx.conf

RUN cp -r ./default /etc/nginx/sites-available/default

# CMD sh /app/srcs/scripts/docker_entrypoint.sh

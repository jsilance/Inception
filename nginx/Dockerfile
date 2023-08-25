FROM debian:buster-20230725

COPY . /app

WORKDIR /app

EXPOSE 443

RUN apt-get update && apt-get install -y nginx ufw

# RUN cp -r ./srcs/nginx.conf /etc/nginx/nginx.conf

# RUN service nginx restart

# RUN cp -r ./default /etc/nginx/sites-available/default

CMD sh /app/srcs/docker_entrypoint.sh

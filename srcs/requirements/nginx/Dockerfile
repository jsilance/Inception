FROM debian:bullseye

WORKDIR /app

EXPOSE 443

RUN apt-get update -y 
RUN apt-get upgrade -y 
RUN apt-get install -y nginx vim curl openssl

RUN mkdir -p /etc/nginx/ssl

RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=BE/ST=BXL/L=Brussels/O=19/OU=19/CN=jusilanc.42.fr/UID=jusilanc"

RUN mkdir -p /var/run/nginx

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

CMD [ "nginx", "-g", "daemon off;" ]

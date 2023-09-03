FROM debian:buster-20230725

WORKDIR /app

EXPOSE 443

RUN apt update && apt upgrade && apt install -y nginx vim curl openssl

RUN mkdir - /etc/nginx/ssl

RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=BE/ST=BXL/L=Brussels/O=19/OU=19/CN=jusilanc.42.fr/UID=jusilanc"

RUN mkdir -p /var/run/nginx

COPY conf/nginx.conf /etc/nginx/nginx.conf

RUN chmod 755 /var/www/html

RUN chown -R www-data:www-data /var/www/html

CMD [ "nginx", "-g", "daemon off;" ]

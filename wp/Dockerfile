FROM debian:buster-20230725

COPY . /app

WORKDIR /app

EXPOSE 443

RUN apt-get update && apt-get install -y php-fpm php-mysql sudo wget

RUN mkdir -p /var/www/html
RUN cd /var/www/html
RUN sudo wget https://wordpress.org/latest.tar.gz
RUN sudo tar -xzvf latest.tar.gz
RUN sudo mv wordpress/* .
RUN rmdir wordpress

CMD "php-fpm -F"

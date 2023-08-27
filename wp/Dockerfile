FROM debian:buster-20230725

COPY . /app

WORKDIR /app

EXPOSE 9000

RUN apt-get update && apt-get install -y php-fpm

RUN mkdir -p /var/www/html
RUN mkdir -p /var/log/php-fpm/
RUN mkdir -p /run/php/
RUN chown -R www-data:www-data /run/php/
RUN

VOLUME [ "/var/www/html" ]

RUN cp srcs/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
RUN cd /var/www/html
RUN ls -l

# CMD ["sh", "/app/srcs/entrypoint.sh"]
CMD ["php-fpm7.3", "-F"]

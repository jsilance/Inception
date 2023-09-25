FROM debian:buster-20230725

### -== INSTALL TOOLS ==- #

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y php7.3 php-fpm php-mysql mariadb-client wget sudo

WORKDIR /tmp
RUN sudo mkdir -p /run/php

COPY conf/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf


RUN groupadd wordpress && useradd -g wordpress wordpress

RUN wget http://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN chmod 755 /usr/local/bin/wp

### -== INSTALL WP ==- #


RUN mkdir /app && chmod -R 755 /app /etc/php/7.3/fpm/php-fpm.conf /run/php && chown -R wordpress:wordpress /app /etc/php/7.3/fpm/php-fpm.conf /run/php
WORKDIR /app


RUN wget https://fr.wordpress.org/wordpress-6.3.1-fr_FR.tar.gz
RUN tar -xf wordpress-6.3.1-fr_FR.tar.gz && mv wordpress/* . && rm -rf wordpress wordpress-6.3.1-fr_FR.tar.gz

RUN chmod -R 755 /app
RUN mkdir -p /usr/logs/php-fpm && chown -R wordpress:wordpress /usr/logs/php-fpm

### -== SETUP CONF ==- #

COPY tools/auto_conf.sh /tmp/auto_conf.sh

USER wordpress

ENTRYPOINT [ "sh", "/tmp/auto_conf.sh" ]
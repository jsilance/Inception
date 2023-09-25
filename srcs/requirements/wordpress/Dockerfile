FROM debian:buster-20230725

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y php7.3 php-fpm php-mysql mariadb-client wget sudo

# RUN wget https://fr.wordpress.org/wordpress-6.3.1-fr_FR.tar.gz -P /var/www

# RUN cd /var/www/ && tar -xzf wordpress-6.3.1-fr_FR.tar.gz && rm wordpress-6.3.1-fr_FR.tar.gz
# RUN cd /var/www/

# RUN chown -R root:root /var/www/wordpress

COPY conf/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf

RUN wget http://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

COPY tools/auto_conf.sh /tmp/auto_conf.sh


RUN sudo mkdir -p /run/php
# ENTRYPOINT [ "sudo", "sh", "/tmp/auto_conf.sh" ]

# VOLUME [ "/var/www/html" ]

CMD ["php-fpm7.3", "-F"]

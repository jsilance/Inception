FROM debian:buster-20230725

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y mariadb-server vim curl

COPY conf/my.cnf /etc/mysql/my.cnf

COPY tools/config.sh /tmp/config.sh

ENTRYPOINT [ "sh", "/tmp/config.sh" ]

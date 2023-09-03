FROM debian:buster-20230725

RUN apt update && apt upgrade && apt install -y mariadb-server vim curl

COPY conf/my.cnf /etc/mysql/my.cnf

COPY tools/config.sh /tmp/config.sh

ENTRYPOINT [ "sh", "/tmp/config.sh" ]

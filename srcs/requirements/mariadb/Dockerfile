FROM debian:buster

RUN apt update -y && apt upgrade -y

RUN apt-get install mariadb-server -y

# RUN apt install mariadb-server mariadb-client -y

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/.sh script.sh

CMD ["bash", "script.sh"]
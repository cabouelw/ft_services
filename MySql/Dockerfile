FROM alpine:3.12.3

RUN apk add openrc
RUN apk add mariadb mariadb-common mariadb-client
# RUN rc-update add mariadb default
RUN openrc && touch /run/openrc/softlevel
RUN sed -i "s/skip-networking/# skip-networking/g" /etc/my.cnf.d/mariadb-server.cnf
RUN echo "http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
RUN apk add telegraf
RUN mkdir /etc/telegraf
ADD ./srcs/telegraf.conf /etc/telegraf/telegraf.conf

ADD ./srcs/wordpress.sql ./wordpress.sql

EXPOSE 3306

ADD ./srcs/run.sh ./run.sh
RUN chmod +x /run.sh
CMD sh run.sh
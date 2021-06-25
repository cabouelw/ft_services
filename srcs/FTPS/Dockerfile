FROM alpine:3.12.3

RUN apk update && apk add openrc && apk add vsftpd
RUN rc-status && touch /run/openrc/softlevel 
RUN rc-update add vsftpd default
RUN echo "http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
RUN apk add openssl
RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=Company, Inc./CN=mydomain.com" -addext "subjectAltName=DNS:mydomain.com" -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.pem -out /etc/ssl/private/vsftpd.pem
RUN apk add telegraf
RUN mkdir /etc/telegraf
ADD ./srcs/telegraf.conf /etc/telegraf/telegraf.conf
COPY ./srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY ./srcs/vsftpd.users_list /etc/vsftpd/vsftpd.users_list
COPY ./srcs/password /
RUN adduser 1337 < /password
EXPOSE 21
COPY ./srcs/run.sh /run.sh
RUN chmod +x /run.sh
CMD sh run.sh

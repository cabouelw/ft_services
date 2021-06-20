FROM alpine:3.12.3

RUN echo "http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
RUN apk update && apk add openssl nginx openrc telegraf

RUN mkdir /etc/telegraf
ADD ./srcs/telegraf.conf /etc/telegraf/telegraf.conf

RUN openrc && touch /run/openrc/softlevel
RUN openssl req -subj "/C=MA/ST=KHOURIBGA/L=BJ/O=Yoki/CN=localhost" -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
RUN openssl dhparam -out /etc/ssl/certs/dhparam.pem 1024
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY /srcs/nginx.conf /etc/nginx/nginx.conf
RUN echo hello > /www/index.html

COPY ./srcs/run.sh /
RUN chmod +x /run.sh
CMD /run.sh
FROM alpine:3.12.3

RUN apk update && apk add openrc
RUN echo "http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
RUN apk add influxdb telegraf
RUN openrc && touch /run/openrc/softlevel
RUN mkdir /etc/telegraf
ADD ./srcs/telegraf.conf /etc/telegraf/telegraf.conf

EXPOSE 8086

COPY ./srcs/run.sh /run.sh
RUN chmod +x /run.sh
CMD sh run.sh

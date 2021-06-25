
addgroup -g 433 -S 1337
adduser -u 431 -D -G 1337 -h /home/1337 -s /bin/false 1337

echo "1337:1337" | chpasswd
chown 1337:1337 /home/1337/ -R

telegraf &
rc-service vsftpd start

sleep 2


while true;
do
    if ! pgrep vsftpd 1>/dev/null;
    then
		  echo "vsftpd is not running !"
		  exit 1
    fi
    if ! pgrep telegraf 1>/dev/null;
    then
		  echo "telegraf is not running !"
		  exit 1
    fi
    sleep 2
done

exit 0
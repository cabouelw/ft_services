
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
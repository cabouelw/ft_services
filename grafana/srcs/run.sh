telegraf &>/dev/null &
( ./grafana/bin/grafana-server -homepath ./grafana 1>/dev/null) &

sleep 3

while true;
do
	if ! pgrep telegraf 1>/dev/null;
	then
		echo "telegraf is not running !"
		exit 1
	fi
	if ! pgrep grafana-server 1>/dev/null; then
		echo "telegraf is not running !"
		exit 1
	fi
	sleep 2
done

exit 0
minikube config set memory 4144
minikube config set cpus 4
minikube start
eval $(minikube docker-env)
docker build -t nginx ./srcs/nginx
docker build -t phpmyadmin ./srcs/phpmyadmin
docker build -t wordpress ./srcs/wordpress
docker build -t mysql ./srcs/mysql
docker build -t influxdb  ./srcs/influxdb
docker build -t grafana ./srcs/grafana
docker build -t ftps ./srcs/ftps
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.2/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.2/manifests/metallb.yaml
kubectl apply -f ./srcs/ymlFiles/nginx.yaml
kubectl apply -f ./srcs/ymlFiles/mysql.yaml
kubectl apply -f ./srcs/ymlFiles/wordpress.yaml
kubectl apply -f ./srcs/ymlFiles/phpmyadmin.yaml
kubectl apply -f ./srcs/ymlFiles/influxdb.yaml
kubectl apply -f ./srcs/ymlFiles/grafana.yaml
kubectl apply -f ./srcs/ymlFiles/ftps.yaml
kubectl apply -f ./srcs/ymlFiles/metallb.yaml
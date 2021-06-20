minikube start
eval $(minikube docker-env)
docker build -t nginx ./nginx
docker build -t phpmyadmin ./phpmyadmin
docker build -t wordpress ./wordpress
docker build -t mysql ./mysql
docker build -t influxdb  ./influxdb
docker build -t grafana ./grafana
docker build -t ftps ./ftps
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.2/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.2/manifests/metallb.yaml
kubectl apply -f ./ymlFiles/nginx.yaml
kubectl apply -f ./ymlFiles/mysql.yaml
kubectl apply -f ./ymlFiles/wordpress.yaml
kubectl apply -f ./ymlFiles/phpmyadmin.yaml
kubectl apply -f ./ymlFiles/influxdb.yaml
kubectl apply -f ./ymlFiles/grafana.yaml
kubectl apply -f ./ymlFiles/ftps.yaml
kubectl apply -f ./ymlFiles/metallb.yaml
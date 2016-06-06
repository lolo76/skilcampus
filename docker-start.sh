

# https://github.com/LaraDock/laradock
# git clone https://github.com/LaraDock/laradock.git

docker-machine start $1
eval $(docker-machine env $1)
docker-compose -f laradock/docker-compose.yml up -d  nginx mysql
echo 'Le serveur est démarré sur' $(docker-machine ip $1)
#docker exec -it {Workspace-Container-Name} bash

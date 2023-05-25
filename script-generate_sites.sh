#!/usr/bin/env bash

sites_conf="docker/nginx/sites/sites.conf"
sites_dir="docker/nginx/sites"

clear

read -p "Digite o nome da nova aplicação (sem espaços em branco): " replace_directory

read -p "Digite agora em qual porta deseja que ela seja executada (sugestão: 8080, 8081, 8082, ..., 8089): " replace_port

sed -e "s/html/$replace_directory/g; s/80/$replace_port/g" "$sites_conf" > "$sites_dir/$replace_directory.conf"

echo "Sucesso!"

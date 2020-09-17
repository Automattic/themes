#!/bin/bash

declare -a ChildThemes=("alves" "balasana" "barnsbury" "brompton" "coutoire" "dalston" "exford" "hever" "leven" "mayland" "maywood" "morden" "redhill" "rivington" "rockfield" "shawburn" "stow" "stratford" )

for child in ${ChildThemes[@]}; do
	cd '../'${child}
	echo 'Rebulding '${child}
	perl -pi -e 's/\"version\": \"((\d+\.)*)(\d+)\"(.*)$/"\"version\": \"".$1.($3+1)."\"".$4/ge' package.json
done

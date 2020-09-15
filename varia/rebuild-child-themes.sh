#!/bin/bash

declare -a ChildThemes=("alves" "balasana" "barnsbury" "brompton" "coutoire" "dalston" "exford" "hever" "leven" "mayland" "maywood" "morden" "redhill" "rivington" "rockfield" "shawburn" "stow" "stratford" )

for child in ${ChildThemes[@]}; do
	echo 'Rebulding '${child}
	cd '../'${child}
	npm install
	npm run build
done

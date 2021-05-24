#!/bin/bash

declare -a ChildThemes=( "mayland-blocks" "seedlet-blocks" "quadrat" )

for child in ${ChildThemes[@]}; do
	cd '../'${child}
	echo 'Rebulding '${child}
	npm run build
done


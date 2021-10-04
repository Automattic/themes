#!/bin/bash

declare -a ChildThemes=( "mayland-blocks" "seedlet-blocks" "quadrat" "skatepark" "geologist" "videomaker" )

for child in ${ChildThemes[@]}; do
	cd '../'${child}
	echo 'Rebulding '${child}
	npm i
	npm run build
done

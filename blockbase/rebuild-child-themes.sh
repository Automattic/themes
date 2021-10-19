#!/bin/bash

declare -a ChildThemes=( "geologist" "mayland-blocks" "payton" "quadrat" "russell" "seedlet-blocks" "skatepark" "videomaker" "zoologist" )

for child in ${ChildThemes[@]}; do
	cd '../'${child}
	echo 'Rebulding '${child}
	npm i
	npm run build
done

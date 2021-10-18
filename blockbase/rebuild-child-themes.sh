#!/bin/bash

echo "Woah!  Careful.  On THIS branch when you do this the child-theme.json will REPLACE theme.json and then will be no more.  You have been warned. \n\n";
read SOMEANSWER

declare -a ChildThemes=( "geologist" "kerr" "mayland-blocks" "payton" "quadrat" "russell" "seedlet-blocks" "skatepark" "videomaker" "zoologist" )

for child in ${ChildThemes[@]}; do
	cd '../'${child}
	rm theme.json
	mv child-theme.json theme.json
done

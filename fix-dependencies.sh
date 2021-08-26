#!/bin/zsh
for theme in */ ; do
	if test -f "./${theme}/package.json"; then
		cd './'${theme}
		echo 'Fixing '${theme}
		npm audit fix
		cd ..
	else
		echo 'Skipping '${theme}
	fi
done

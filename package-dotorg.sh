#!/bin/zsh
if [[ "$1" != "" ]]; then
    THEME="$1"
	find $THEME/assets/sass/style.scss -type f -exec sed -i '' 's/-wpcom//g' {} \;
	find $THEME/assets/sass/style.scss -type f -exec sed -i '' 's/, auto-loading-homepage//g' {} \;
	find $THEME/assets/sass/style.scss -type f -exec sed -i '' 's/, jetpack-global-styles//g' {} \;
	cd $THEME && npm run build;
	mkdir $THEME;
	rsync -avz --exclude $THEME --exclude-from '../dotorg-exclude.txt' ./ $THEME
	find $THEME -type f -name '*.map' -delete # for some reason rsync won't exclude map files
	rm -rf $THEME/$THEME
	zip -r -X $THEME.zip $THEME
	rm -rf $THEME
	git restore ./
else
	echo "Please provide the theme slug as an argument to the script."
fi
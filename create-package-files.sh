#!/bin/bash

# Look into all the subfolders
for THEME_SLUG in */ ; do

	THEME_SLUG=$(echo $THEME_SLUG | sed 's:/*$::')

	# And for those that have a style.css but no package.json file...
	if [ -f "./${THEME_SLUG}/style.css" ] && [ ! -f "./${THEME_SLUG}/package.json" ]; then

		THEME_VERSION=$(cat ./${THEME_SLUG}/style.css \
		  | grep Version \
		  | head -1 \
		  | awk -F: '{ print $2 }' \
		  | sed 's/[",]//g' \
		  | sed 's/-wpcom//g' \
		  | tr -d '[[:space:]]')

	printf "\n\nCreating package.json for ${THEME_SLUG} version ${THEME_VERSION}"	

	printf '{
  "name": "'${THEME_SLUG}'",
  "version": "'${THEME_VERSION}'",
  "description": "'${THEME_SLUG}'",
  "bugs": {
    "url": "https://github.com/Automattic/themes/issues"
  },
  "homepage": "https://github.com/Automattic/themes",
  "scripts": {
    "build": "echo Nothing to build"
  }
}' >> ./${THEME_SLUG}/package.json

  fi
done

		



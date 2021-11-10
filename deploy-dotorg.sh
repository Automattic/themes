#!/bin/bash

# Make sure SVN credentials and project slug are set
if [[ -z "$SVN_USERNAME" ]]; then
	echo "Set the SVN_USERNAME secret"
	exit 1
fi

if [[ -z "$SVN_PASSWORD" ]]; then
	echo "Set the SVN_PASSWORD secret"
	exit 1
fi

rm -rf ./deploy

# Look into all the themes we expect to deploy

declare -a THEMES_TO_DEPLOY=(
	"blockbase" 
	"zoologist"
	"geologist"
	"mayland-blocks"
	"quadrat"
	"skatepark"
	"seedlet-blocks"
)

for THEME_SLUG in ${THEMES_TO_DEPLOY[@]} ; do

	THEME_VERSION=$(cat ./${THEME_SLUG}/style.css \
	  | grep Version \
	  | head -1 \
	  | awk -F: '{ print $2 }' \
	  | sed 's/[",]//g' \
	  | sed 's/-wpcom//g' \
	  | tr -d '[[:space:]]')

	# TODO: This does take into account the -wpcom appended to some theme versions.
	# Ideally that can be removed from all of the themes versioning in this repository.
	# I'm not convinced it's helpful...

	printf "\n\nAttempting to deploy theme ${THEME_SLUG} version ${THEME_VERSION}\n"

	SVN_URL="https://themes.svn.wordpress.org/${THEME_SLUG}/"
	SVN_DIR="$PWD/deploy/${THEME_SLUG}"

	svn checkout --depth immediates "$SVN_URL" "$SVN_DIR" --no-auth-cache --non-interactive > /dev/null

	if [ ! -d "$SVN_DIR" ]; then
		echo "No theme by that slug to be checked out. Probably not a theme.  Moving on."
		continue;
	fi

	if [ -d "$SVN_DIR/$THEME_VERSION" ]; then
		rm -rf $SVN_DIR
		echo "Release already exists.  Moving on."
		continue;
	fi

	echo "➤ Copying theme '${THEME_SLUG}' version '${THEME_VERSION}' to svn repository... "
	rsync -rc --include=theme.json --exclude-from './dotorg-exclude.txt' ./$THEME_SLUG/ $SVN_DIR/$THEME_VERSION

	# Remove -wpcom from versoning
	find $SVN_DIR/$THEME_VERSION/style.css -type f -exec sed -i '' 's/-wpcom//g' {} \; 

	# Remove the wpcom-specific tags used in some themes
	find $SVN_DIR/$THEME_VERSION/style.css -type f -exec sed -i '' 's/, auto-loading-homepage//g' {} \; 
	find $SVN_DIR/$THEME_VERSION/style.css -type f -exec sed -i '' 's/, jetpack-global-styles//g' {} \; 

	# Add the version to SVN
	svn add $SVN_DIR --force > /dev/null

	echo "➤ Committing files..."
	svn commit $SVN_DIR -m "Update to version ${THEME_VERSION} from GitHub" --no-auth-cache --non-interactive  --username ${SVN_USERNAME} --password ${SVN_PASSWORD}
done
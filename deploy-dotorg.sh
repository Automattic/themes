#!/bin/bash

# Make sure SVN credentials and project slug are set
if [[ -z "$SVN_USERNAME" ]] && [[ $1 != "preview" ]]; then
	echo "Set the SVN_USERNAME secret"
	exit 1
fi

if [[ -z "$SVN_PASSWORD" ]] && [[ $1 != "preview" ]]; then
	echo "Set the SVN_PASSWORD secret"
	exit 1
fi

rm -rf ./deploy

# Look into all the themes we expect to deploy

declare -a THEMES_TO_DEPLOY=(
	"adventurer"
	"archeo"
	"bibimbap"
	"bitacora"
	"blockbase"
	"course"
	"ctlg"
	"disco"
	"geologist"
	"george-lois"
	"hey"
	"lettre"
	"lineup"
	"livro"
	"mayland-blocks"
	"paimio"
	"pendant"
	"pixl"
	"poema"
	"quadrat"
	"rainfall"
	"remote"
	"seedlet-blocks"
	"skatepark"
	"stewart"
	"storia"
	"upsidedown"
	"vivre"
	"zoologist"
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

	directories=($SVN_DIR/*)
	last_directory=${directories[${#directories[@]}-1]}

	echo "➤ Copying previous version of theme '${THEME_SLUG}' to svn repository... "
	svn update --set-depth infinity ${last_directory} --non-interactive 
	svn cp ${last_directory} $SVN_DIR/$THEME_VERSION

	echo "➤ Copying theme '${THEME_SLUG}' version '${THEME_VERSION}' to svn repository... "
	rsync -rc --delete --include=theme.json --exclude-from './dotorg-exclude.txt' ./$THEME_SLUG/ $SVN_DIR/$THEME_VERSION

	# Remove the wpcom-specific tags used in some themes
	find $SVN_DIR/$THEME_VERSION/style.css -type f -exec sed -i '' 's/, auto-loading-homepage//g' {} \; 

	# Remove files from the previous version	
	svn status $SVN_DIR/$THEME_VERSION | grep "^\!" | sed 's/^\! *//g' | xargs svn rm;

	# Add the version to SVN
	svn add $SVN_DIR/$THEME_VERSION --force --depth infinity -q > /dev/null

 	if [[ $1 == "preview" ]]; then
		svn status $SVN_DIR
	else
		echo "➤ Committing files..."
		svn commit $SVN_DIR -m "Update to version ${THEME_VERSION} from GitHub" --no-auth-cache --non-interactive  --username ${SVN_USERNAME} --password ${SVN_PASSWORD} 2>&1 | grep 'svn: E'
		if [[ $? -eq 0 ]]; then
			echo 'Commit failed.'
			exit 1
		fi
	fi
done

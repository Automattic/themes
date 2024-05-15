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

# These themes either:
# 	are not (and not expected to be) deployed to wporg
# 	have been deployed to wporg, however they are not expected to be updated
# Note that all classic themes (those without a theme.json file) are ALSO ignored
declare -a THEMES_TO_IGNORE=(
        'aldente'
        'allez'
        'alter'
        'ames'
        'antonia'
        'appleton'
        'arbutus'
        'artly'
        'assembler'
        'attar'
        'awburn'
        'azur'
        'barnett'
        'barnsbury23'
        'beep'
        'bennett'
        'blank-canvas-3'
        'block-canvas'
        'blogorama'
        'boxedbio'
        'calvin'
        'calyx'
        'chanson'
        'cortado'
        'covr'
        'craftfully'
        'creatio-2'
        'creatio'
        'curriculum'
        'dorna'
        'dos'
        'entry'
        'epi'
        'erma'
        'eventual'
        'exmoor'
        'farrow'
        'foam'
        'grammerone'
        'hall'
        'hari'
        'heiwa'
        'ici'
        'indice'
        'infield'
        'iotix'
        'issue'
        'jackson'
        'kansei'
        'kaze'
        'kingsley'
        'kiosko'
        'lativ'
        'loic'
        'lois'
        'luce'
        'lynx'
        'marl'
        'masu'
        'meraki'
        'messagerie'
        'montagna'
        'mpho'
        'muscat'
        'mysa'
        'nested'
        'nook'
        'organizer'
        'otis'
        'overlaid'
        'perenne'
        'pieria'
        'poesis'
        'pomme'
        'programme'
        'raw'
        'reverie'
        'ritratto'
        'russell'
        'screenplay'
        'shhh'
        'snd'
        'spearhead-blocks'
        'spiel'
        'stage'
        'startfit'
        'sten'
        'strand'
        'sunderland'
        'tenaz'
        'texty'
        'the-jazzers'
        'the-menu'
        'tu'
        'twentytwentytwo-blue'
        'twentytwentytwo-mint'
        'twentytwentytwo-pink'
        'twentytwentytwo-red'
        'twentytwentytwo-swiss'
        'verso'
        'vetro'
        'winkel'
        'xanadu'
)

rm -rf ./deploy

# Do things for all of the themes
for THEME_SLUG in */ ; do

	# Skip any classic themes (assuming that none of our classic themes use a theme.json file)
	if ! test -f "./${THEME_SLUG}/theme.json"; then
		# echo "Ignoring classic theme ${THEME_SLUG}. Moving on."
		continue;
	fi

	# Skip any themes that are in the ignore list
	if [[ " ${THEMES_TO_IGNORE[*]} " == *" ${THEME_SLUG//\//} "* ]]; then
		# echo "Ignoring theme ${THEME_SLUG} from list. Moving on."
		continue;
	fi

	if test -f "./${THEME_SLUG}/style.css"; then

		THEME_VERSION=$(cat ./${THEME_SLUG}/style.css \
		  | grep Version \
		  | head -1 \
		  | awk -F: '{ print $2 }' \
		  | sed 's/[",]//g' \
		  | sed 's/-wpcom//g' \
		  | tr -d '[[:space:]]')

		SVN_URL="https://themes.svn.wordpress.org/${THEME_SLUG}/"
		SVN_DIR="$PWD/deploy/${THEME_SLUG}"

		response=$(curl -s -o /dev/null -w "%{http_code}" "$SVN_URL")
		if [ "$response" != "200" ]; then
			# echo "No theme with slug ${THEME_SLUG} to be updated. Moving on."
			continue;
		fi

		response=$(curl -s -o /dev/null -w "%{http_code}" "$SVN_URL/$THEME_VERSION/")
		if [ "$response" == "200" ]; then
			# echo "${THEME_SLUG} version '$THEME_VERSION' already deployed.  Moving on."
			continue;
		fi

		# printf "\n\nAttempting to deploy theme ${THEME_SLUG} version ${THEME_VERSION}\n"

		svn checkout --depth immediates "$SVN_URL" "$SVN_DIR" --no-auth-cache --non-interactive > /dev/null

		if [ ! -d "$SVN_DIR" ]; then
			continue;
		fi

		if [ -d "$SVN_DIR/$THEME_VERSION" ]; then
			rm -rf $SVN_DIR
			echo "${THEME_SLUG} version '$THEME_VERSION' already deployed.  Moving on."
			continue;
		fi

		directories=($SVN_DIR/*)
		last_directory=${directories[${#directories[@]}-1]}
		last_version="${last_directory##*/}"

		echo "➤ Upgrading ${THEME_SLUG} from ${last_version} to $THEME_VERSION"

	 	if [[ $1 == "preview" ]]; then
			continue;
		fi	

		echo "➤ Copying previous version of theme ('${last_directory}') '${THEME_SLUG}' to svn repository... "
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

		echo "➤ Committing files..."
		svn commit $SVN_DIR -m "Update to version ${THEME_VERSION} from GitHub" --no-auth-cache --non-interactive  --username ${SVN_USERNAME} --password ${SVN_PASSWORD} 2>&1 | grep 'svn: E'
		if [[ $? -eq 0 ]]; then
			echo 'Commit failed.'
			exit 1
		fi
	fi
done

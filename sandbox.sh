#!/bin/bash

# Load the configuration file
FILE=.sandbox-config

# Create the configuration file if it does not exist
if ! test -f "$FILE"; then
    echo "No sandbox config exists."

    echo "What is the sandbox user? [wpdev]"
    read SANDBOX_USER
    SANDBOX_USER="${SANDBOX_USER:-wpdev}"

    echo "What is the sandbox location?"
    read SANDBOX_LOCATION
    [[ -z "$SANDBOX_LOCATION" ]] && { echo "Come back when you know where your sandbox is." ; exit 1; }

    echo "What is the themes folder on the sandbox? [/home/$SANDBOX_USER/public_html/wp-content/themes/pub]"
    read SANDBOX_PUBLIC_THEMES_FOLDER
    SANDBOX_PUBLIC_THEMES_FOLDER="${SANDBOX_PUBLIC_THEMES_FOLDER:-/home/$SANDBOX_USER/public_html/wp-content/themes/pub}"

    echo "Writing $FILE"
    /bin/cat <<EOM >$FILE
SANDBOX_USER="$SANDBOX_USER"
SANDBOX_LOCATION="$SANDBOX_LOCATION"
SANDBOX_PUBLIC_THEMES_FOLDER="$SANDBOX_PUBLIC_THEMES_FOLDER"
EOM

fi

source $FILE 

if [ $1 == "clean" ]; then
ssh $SANDBOX_USER@$SANDBOX_LOCATION << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'; 
  svn revert -R .;
  svn cleanup --remove-unversioned;
  svn up;
EOF

elif [ $1 == "push" ]; then

  git remote update

  current_branch=$(git branch --show-current)
  hash1=$(git show-ref --heads -s trunk)
  hash2=$(git merge-base trunk ${current_branch})

  if [ ! "${hash1}" = "${hash2}" ]; then
    echo "!! ----------------------------------------------------------- !!

    The branch you are pushing is not up-to-date with /trunk.
    This will result in out-of-date resources on your sandbox.
    Are you sure you wish to proceed?

!! ----------------------------------------------------------- !!
    "
    exit 1;
  fi

  rsync -av --exclude-from='.sandbox-ignore' ./ $SANDBOX_USER@$SANDBOX_LOCATION:$SANDBOX_PUBLIC_THEMES_FOLDER/

else 
  echo 'No known command given. [clean, push]'

fi
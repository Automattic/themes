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

if [[ $1 == "clean" ]]; then
ssh -T $SANDBOX_USER@$SANDBOX_LOCATION << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'; 
  svn revert -R .;
  svn cleanup --remove-unversioned;
  svn up;
EOF

elif [[ $1 == "push" ]]; then

  git remote update
  current_branch=$(git branch --show-current)
  hash1=$(git rev-parse origin/trunk)
  hash2=$(git merge-base origin/trunk ${current_branch})
  files_to_ignore=''

  if [ ! "${hash1}" = "${hash2}" ]; then

  if [[  $2 != '--force' && $2 != '--ignore' ]]; then

    echo "!! ----------------------------------------------------------- !!

    The branch you are pushing is not up-to-date with /trunk.
    This may result in out-of-date resources on your sandbox.
    How do you wish to proceed?

    1 - Nevermind, I'll merge/rebase my branch first.
        (This option is the safest.)

    2 - Go ahead, I know what I'm doing. I want the old files on my sandbox.
        (This is a good option if you are evaluating an old branch for breakage
         and want to have the sandbox reflect exactly the way it was back then.)

    3 - IGNORE the files changed in /trunk since this branch diverged.
        (This is great during development so that you don't have to keep your
         branch completely up-to-date with /trunk and MIGHT be safe for pushing
         a build.  Use at your own risk.)

!! ----------------------------------------------------------- !!
How do you wish to proceed? [1]"
    read sync_type 
    fi

    if [[ $sync_type = "3" || $2 = '--ignore' ]]; then
      echo "building ignore list based on divergence"

      # These are the files that were changed in trunk since this branch diverged
      files_to_ignore=$(git diff ${hash2} origin/trunk --name-only)
      files_to_ignore=($files_to_ignore)

      # These are the files changed in THIS branch since it diverged
      # EVEN IF they changed in trunk we STILL want to include them in our sync
      files_to_include=$(git diff ${hash2} ${current_branch} --name-only)
      files_to_include=($files_to_include)

      for target in "${files_to_include[@]}"; do
        for i in "${!files_to_ignore[@]}"; do
          if [[ ${files_to_ignore[i]} = $target ]]; then
            unset 'files_to_ignore[i]'
          fi
        done
      done

      # These are the changes we have made but haven't committed yet
      # EVEN IF they changed in trunk we STILL want to include them in our sync
      files_to_include=$(git diff HEAD --name-only)
      files_to_include=($files_to_include)

      for target in "${files_to_include[@]}"; do
        for i in "${!files_to_ignore[@]}"; do
          if [[ ${files_to_ignore[i]} = $target ]]; then
            unset 'files_to_ignore[i]'
          fi
        done
      done

      ignore_string=""

      for target in "${files_to_ignore[@]}"; do
        ignore_string="${ignore_string}${target}','"
      done
      ignore_string=${ignore_string::${#ignore_string}-2}
      ignore_string="{'$ignore_string}"

    elif [[ $sync_type = "2" || $2 = '--force' ]]; then
      echo "syncing to sandbox exactly what you have here"

    else
      echo "Exiting.  Clean yourself up and come back later."
      exit 0;

    fi

  fi

  cmd="rsync -av --no-p --no-times --exclude-from='.sandbox-ignore' --exclude=$ignore_string ./ $SANDBOX_USER@$SANDBOX_LOCATION:$SANDBOX_PUBLIC_THEMES_FOLDER/"
  eval $cmd

else 
  echo 'No known command given. [clean, push]'

fi
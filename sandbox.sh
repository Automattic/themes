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
      committed_files_to_include=$(git diff ${hash2} ${current_branch} --name-only)
      committed_files_to_include=($committed_files_to_include)

      # Remove from the files_to_ignore collection anything found in committed_files_to_include
      for target in "${committed_files_to_include[@]}"; do
        for i in "${!files_to_ignore[@]}"; do
          if [[ ${files_to_ignore[i]} = $target ]]; then
            unset 'files_to_ignore[i]'
          fi
        done
      done

      # These are the changes we have made but haven't committed yet
      # EVEN IF they changed in trunk we STILL want to include them in our sync
      uncommitted_files_to_include=$(git diff HEAD --name-only)
      uncommitted_files_to_include=($uncommitted_files_to_include)

      # Remove from the files_to_ignore collection anything found in the uncommitted_files_to_include
      for target in "${uncommitted_files_to_include[@]}"; do
        for i in "${!files_to_ignore[@]}"; do
          if [[ ${files_to_ignore[i]} = $target ]]; then
            unset 'files_to_ignore[i]'
          fi
        done
      done


      # Build a string based on files_to_ignore to pass to rsync
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

  # Determine which files have been removed from the repository (or renamed) as of this head, within the past three months, according to git
  files_to_delete=$(git log --format=format:"" --name-only --since="last three months" -M100% --diff-filter=D HEAD)

  # Determine which files have been removed locally but not committed as a change
  uncommitted_files_to_delete=$(git diff HEAD --name-only --diff-filter=D)

  # Remove all of those files from the destination.  (Note, if a file has since been re-added to the repo it will be uploaded in the next step)
  remove_command="ssh $SANDBOX_USER@$SANDBOX_LOCATION 'cd $SANDBOX_PUBLIC_THEMES_FOLDER && rm -f $files_to_delete $uncommitted_files_to_delete'"
  eval $remove_command;

  cmd="rsync -av --no-p --no-times --exclude-from='.sandbox-ignore' --exclude=$ignore_string ./ $SANDBOX_USER@$SANDBOX_LOCATION:$SANDBOX_PUBLIC_THEMES_FOLDER/"
  eval $cmd

elif [[ $1 == "export" ]]; then
  # Export the site content from your sandbox to a local file
  export_command='ssh $SANDBOX_USER@$SANDBOX_LOCATION "mkdir /home/wpcom/export ; rm /home/wpcom/export/* ; /home/wpcom/public_html/bin/wp export --dir=/home/wpcom/export"'
  download_command='mkdir ./export ; scp $SANDBOX_USER@$SANDBOX_LOCATION:/home/wpcom/export/* ./export/sandbox.wordpress.xml'
  eval $export_command
  eval $download_command
  echo "
  
  Export Complete!
  
  You can find the exported file in ./export/sandbox.wordpress.xml"

elif [[ $1 == "export-theam" ]]; then
  # Export the site content from theamdemo to a local file
  export_command='ssh $SANDBOX_USER@$SANDBOX_LOCATION "mkdir /home/wpcom/export ; rm /home/wpcom/export/* ; /home/wpcom/public_html/bin/wp export --dir=/home/wpcom/export --url=theamdemo.wordpress.com"'
  download_command='mkdir ./export ; scp $SANDBOX_USER@$SANDBOX_LOCATION:/home/wpcom/export/* ./export/theamdemo.wordpress.xml'
  eval $export_command
  eval $download_command
  echo "
  
  Export Complete!
  
  You can find the exported file in ./export/theamdemo.wordpress.xml"
else 
  echo 'No known command given. [clean, push, export, export-theam]'

fi
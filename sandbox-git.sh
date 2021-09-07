#!/bin/bash

SANDBOX_PUBLIC_THEMES_FOLDER='/home/wpdev/public_html/wp-content/themes/pub';

# Clean the sandbox.
# checkout trunk and ensure it's up-to-date.
# Remove any other changes.
if [[ $1 == "status" ]]; then
ssh -TA wpcom-sandbox << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'; 
  git status;
  echo
EOF

# Clean the sandbox.
# checkout origin/trunk and ensure it's up-to-date.
# Remove any other changes.
elif [[ $1 == "clean" ]]; then
ssh -TA wpcom-sandbox << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'; 
  git reset --hard HEAD;
  git clean -fd;
  git checkout trunk;
  git pull;
  echo
EOF

# Add the public github as a remote to your sandbox
elif [[ $1 == "add-github-remote" ]]; then
ssh -TA wpcom-sandbox << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'; 
  git remote add github git@github.com:Automattic/themes.git
  git fetch github
  echo
EOF

# Add the sandbox as a remote to your local
# This doesn't seem to actually work right now...
# This allows you to refer to the github as "origin" and your sandbox as "sandbox"
# Note that for this to work your ~/.ssh/config must have 
# Host wpcom-sandbox
#     User wpdev
#     HostName SANDBOXURL.wordpress.com
#     ForwardAgent yes
elif [[ $1 == "add-sandbox-remote" ]]; then
git remote add sandbox wpdev@wpcom-sandbox:/home/wpdev/public_html/wp-content/themes/pub/.git

# Switch the sandbox to a given branch.
# Defaults to current branch if not provided.
elif [[ $1 == "checkout-branch" ]]; then
  if [[ -z $2 ]]; then
    BRANCH_NAME=$(git symbolic-ref --short HEAD)
  else
    BRANCH_NAME=$2;
  fi

ssh -TA wpcom-sandbox << EOF 
  cd '$SANDBOX_PUBLIC_THEMES_FOLDER'
  git fetch
  git checkout github/$BRANCH_NAME
  echo
EOF

# First ensure that the local and sandbox are on the same branch.
# Then push whatever has changed in the local branch to the sandbox via rsync.
elif [[ $1 == "push-local-diff" ]]; then
ssh -TA wpcom-sandbox << EOF 
  echo '#TODO: Everything';
EOF

# Deploy to the sandbox the target branch
# Create a Phabricator diff of the change to be deployed and display the URL.
# Bonus points: Do this any time a branch is opened to merge to /trunk in github
elif [[ $1 == "deploy-branch" ]]; then
ssh -TA wpcom-sandbox << EOF 
  echo '#TODO: Alas, until histories align this is not possible';
EOF

# Clone the sandbox here.
# I don't think you would ever actually do this one... if you have this script then you've already cloned the repo from SOMEWHERE.
# It's mostly here as a reference.
# (helpful hint, if that's the only repository in play [premium] this here line might be helpful)
elif [[ $1 == "clone" ]]; then
git clone wpdev@wpcom-sandbox:/home/wpdev/public_html/wp-content/themes/pub/.git .


# All Done
fi

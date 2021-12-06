#!/bin/bash

SANDBOX_PUBLIC_THEMES_FOLDER='/home/wpdev/public_html/wp-content/themes/pub';

# Display the status of the repo on sandbox
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
# This is useful to checkout branches from github directly to your sandbox
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

# Switch the sandbox to a given github branch.
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
# This isn't going to work because the public repo (github) and private repo (a8c)
# don't have common ancestry
elif [[ $1 == "push-local-diff" ]]; then
ssh -TA wpcom-sandbox << EOF 
  echo '#TODO: Everything';
EOF

elif [[ $1 == "push" ]]; then
rsync -av --no-p --no-times --exclude-from='.sandbox-ignore' ./ wpcom-sandbox:$SANDBOX_PUBLIC_THEMES_FOLDER/

elif [[ $1 == "create-diff" ]]; then

#TODO: Do some fancy git stuff to build the commit message
commit_message="Deploy Themes [THEME UMBRELLA PROJECT VERSION] to wpcom
   
Summary:
This is a test.  Please ignore this diff
This should reflect all of the Pull Requests between THIS BRANCH and TRUNK (stating at the point of diversion)

Test Plan: Execute Smoke Test
   
Reviewers:
   
Subscribers:
"

ssh -TA wpcom-sandbox << EOF 
  cd $SANDBOX_PUBLIC_THEMES_FOLDER
  git branch -D deploy
  git checkout -b deploy
  git add --all
  git commit -m "$commit_message"
  arc diff --create --verbatim
EOF
#TODO: Pull the Phabricator URL from the output above
# Open phabricator URL in my browser
# Add Phabricator URL to the PR I'm working with (as a comment) ???

elif [[ $1 == "checkout-diff" ]]; then
diff_id=$2
ssh -TA wpcom-sandbox << EOF 
  cd $SANDBOX_PUBLIC_THEMES_FOLDER
  arc patch $diff_id
EOF


elif [[ $1 == "deploy-diff" ]]; then
ssh -TA wpcom-sandbox << EOF 
  cd $SANDBOX_PUBLIC_THEMES_FOLDER
  arc land --onto trunk --preview
EOF

# Clone the sandbox here.
# I don't think you would ever actually do this one... if you have this script then you've already cloned the repo from SOMEWHERE.
# It's mostly here as a reference.
elif [[ $1 == "clone" ]]; then
git clone wpdev@wpcom-sandbox:/home/wpdev/public_html/wp-content/themes/pub/.git .


# All Done
fi

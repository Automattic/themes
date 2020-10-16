#!/bin/zsh
find assets/sass/*.scss -type f -exec sed -i '' 's/-wpcom//g' {} \; 
npm run build;
mkdir seedlet;
rsync -rv --exclude="seedlet" --exclude=".git" --exclude=".DS_Store" --exclude="*.sh" --exclude="*.json" --exclude="postcss.config.js" --exclude="node_modules" --exclude="*wpcom*" --exclude="inc/headstart" ./ seedlet
zip -r -X seedlet.zip seedlet
rm -rf seedlet
git restore ./
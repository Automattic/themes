#!/bin/zsh
find assets/sass/*.scss -type f -exec sed -i '' 's/-wpcom//g' {} \; 
find assets/sass/*.scss -type f -exec sed -i '' 's/auto-loading-homepage, //g' {} \; 
npm run build;
mkdir seedlet;
rsync -avz --exclude-from 'dotorg-exclude.txt' ./ seedlet
find seedlet -type f -name '*.map' -delete # for some reason rsync won't exclude map files
zip -r -X seedlet.zip seedlet
rm -rf seedlet
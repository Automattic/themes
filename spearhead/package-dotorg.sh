#!/bin/zsh
find assets/sass/*.scss -type f -exec sed -i '' 's/-wpcom//g' {} \; 
find assets/sass/*.scss -type f -exec sed -i '' 's/auto-loading-homepage, //g' {} \; 
npm run build;
mkdir spearhead;
rsync -avz --exclude-from '../dotorg-exclude.txt' ./ spearhead
find spearhead -type f -name '*.map' -delete # for some reason rsync won't exclude map files
zip -r -X spearhead.zip spearhead
rm -rf spearhead
git restore ./
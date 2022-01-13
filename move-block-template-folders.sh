#!/bin/zsh

# This is a temporary script used to transition all block theme folders from the old format to the new
# /block-template-parts -> /parts
# /block-templates -> /templates

for theme in */ ; do

	if test -d "./${theme}/block-template-parts"; then
		mv "./${theme}/block-template-parts" "./${theme}/parts"
	fi

	if test -d "./${theme}/block-templates"; then
		mv "./${theme}/block-templates" "./${theme}/templates"
	fi

done	
	
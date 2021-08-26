#!/bin/zsh

git remote update > /dev/null
current_branch=$(git branch --show-current)
hash_at_divergence=$(git merge-base origin/trunk ${current_branch})

# version bump (patch) any project that has any *comitted* changes
version-bump() {
	has_uncomitted_changes=$(git diff-index --name-only HEAD -- .)
	has_comitted_changes=$(git diff --name-only ${hash_at_divergence} HEAD -- .)
	#TODO: Determine if version has changed since divergence and skip if so.  Otherwise we might version-bump something that has already version bumped.
	if [ -n "$has_comitted_changes" ] || [ -n "$has_uncomitted_changes" ]; then
		echo "Version bumping $1"
		npm version patch --no-git-tag-version
		apply-version $1
		echo
	fi
}

# copy the version from package.json (the source of truth) to other standard locations.
apply-version() {

 	current_version=$(node -p "require('./package.json').version")
	files_to_update=( $(find . -name style.css -o -name style.scss -o -name style-child-theme.scss) )

	for file_to_update in "${files_to_update[@]}"; do
		if test -f "$file_to_update"; then
			echo "Apply version from package.json to $file_to_update"
	 		perl -pi -e 's/Version: (.*)$/"Version: '$current_version'"/ge' $file_to_update 
		fi
	done

}

command=$1
echo

# Do things for all of the themes
for theme in */ ; do
	if test -f "./${theme}/package.json"; then
		cd './'${theme}
		case $command in
			"install-dependencies")
				echo 'Installing Dependencies for '${theme}
				npm install
				echo
				;;
			"audit-dependencies")
				echo 'Auditing and fixing dependencies for '${theme}
				npm audit fix
				echo
				;;
			"build")
				echo 'Building '${theme}
				npm run build
				echo
				;;
			"version-bump")
				version-bump ${theme}
				;;
			"apply-version")
				echo 'Applying version from package.json throughout '${theme}
				apply-version ${theme}
				echo
				;;
		esac	
		cd ..
	else
		# echo 'Skipping '${theme}
	fi
done

# Do things for the root folder
case $command in
	"audit-dependencies")
		echo 'Auditing and fixing dependencies for root project'
		npm audit fix
		;;
	"version-bump")
		version-bump "root project"
		;;
esac
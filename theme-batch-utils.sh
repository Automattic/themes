#!/bin/zsh

git remote update > /dev/null
current_branch=$(git branch --show-current)
hash_at_divergence=$(git merge-base origin/trunk ${current_branch})
version_bump_count=0

# version bump (patch) any theme that has any *comitted* changes since it was branched from /trunk or any *uncomitted* changes
version-bump() {
	# Only version bump things that haven't already had their version changed
	if [[ $1 = 'ROOT' ]]; then
		# Only version bump ROOT if another project has been version bumped
		if [[ $version_bump_count = 0 ]]; then
			echo "No projects have changed.  Nothing version bumped."
			echo
			return
		fi
		package_string=$(git show ${hash_at_divergence}:package.json)
	else
		package_string=$(git show ${hash_at_divergence}:$1package.json 2>/dev/null)
	fi

	# If the last command exited poorly ($? = last command exit code) the package.json didn't exist at the point of divergence and we can stop here.
	if [[ $? -ne 0 ]]; then
		return
	fi

 	current_version=$(node -p "require('./package.json').version")
	previous_version=$(node -pe "JSON.parse(process.argv[1]).version" "${package_string}")
	if [[ $current_version != $previous_version ]]; then
		return
	fi

	# Only version bump things that have changes
	uncomitted_changes=$(git diff-index --name-only HEAD -- .)
	comitted_changes=$(git diff --name-only ${hash_at_divergence} HEAD -- .)
	if [ -z "$comitted_changes" ] && [ -z "$uncomitted_changes" ]; then
		return
	fi

	((version_bump_count+=1))

	echo "Version bumping $1"
	npm version patch --no-git-tag-version
	if [[ $1 != 'ROOT' ]]; then
		apply-version $1
	fi
	echo
}

# copy the version from package.json (the source of truth) to other standard locations (including style.css, style.scss and style-child-theme.scss).
apply-version() {

 	current_version=$(node -p "require('./package.json').version")
	files_to_update=( $(find . -name style.css -o -name style.scss -o -name style-child-theme.scss -maxdepth 2) )

	for file_to_update in "${files_to_update[@]}"; do
		if test -f "$file_to_update"; then
			echo "Apply version from package.json to $file_to_update"
	 		perl -pi -e 's/Version: (.*)$/"Version: '$current_version'"/ge' $file_to_update 
		fi
	done

}

# only build the project if is has changed since it diverged from trunk
build-if-changed() {
	# Only build things that have changes
	uncomitted_changes=$(git diff-index --name-only HEAD -- .)
	comitted_changes=$(git diff --name-only ${hash_at_divergence} HEAD -- .)
	if [ -z "$comitted_changes" ] && [ -z "$uncomitted_changes" ]; then
		return
	fi
	npm run build
}

build-org-zip-if-changed() {
	# Only build things that have changes
	uncomitted_changes=$(git diff-index --name-only HEAD -- .)
	comitted_changes=$(git diff --name-only ${hash_at_divergence} HEAD -- .)
	if [ -z "$comitted_changes" ] && [ -z "$uncomitted_changes" ]; then
		return
	fi
	build-org-zip $1
}

build-org-zip() {
	THEME=${1//\/}
	echo "Building .zip file for $THEME"

 	current_version=$(node -p "require('./package.json').version")
	
	# Copy the theme into a subfolder (excluding the excludables) to be packaged up in a zip
	mkdir $THEME;
	rsync -avzq --include='theme.json' --exclude $THEME --exclude-from '../dotorg-exclude.txt' ./ $THEME

	# Make sure the -wpcom version naming and tags aren't shipped 
	#NOTE: (can we be rid of that -wpcom 'versioning')
	find ./$THEME/style.css -type f -exec sed -i '' 's/-wpcom//g' {} \;  
	find ./$THEME/style.css -type f -exec sed -i '' 's/, auto-loading-homepage//g' {} \; 
	find ./$THEME/style.css -type f -exec sed -i '' 's/, jetpack-global-styles//g' {} \; 

	mkdir ../build/"$THEME"_"$current_version"/
	zip -q -r -X ../build/"$THEME"_"$current_version"/$THEME.zip $THEME
	rm -rf $THEME

	echo
}

command=$1
echo

# Do these things for a command, but before running the command on each theme
case $command in
	"build-org-zip-all")
		;&
	"build-org-zip-if-changed")
		# Get the /build folder ready to recieve zips
		if [ ! -d "./build" ]; then
			mkdir build
		fi
		rm -rf ./build/*	
		;;
esac
	
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
				build-if-changed ${theme}
				;;
			"build-all")
				echo 'Building '${theme}
				npm run build
				echo
				;;
			"build-org-zip-if-changed")
				build-org-zip-if-changed ${theme}
				;;
			"build-org-zip-all")
				build-org-zip ${theme}
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
		version-bump "ROOT"
		;;
esac
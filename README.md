# Automattic's Free Themes

## Maintainers

These themes are maintained by the [Automattic Theme Team](https://themeshaper.com/about/).

## Submitting issues

Before submitting your issue, make sure it has not been discussed earlier. You can search for existing tickets [here](https://github.com/Automattic/themes/search).

Here are some tips to consider and to help you write a great report:

* Themes support Microsoft Internet Explorer 11 and Edge, as well as the latest two versions of all other major browsers.
* Themes are backwards compatible with the two versions prior to the current stable version of WordPress.
* Themes use HTML5 markup.
* Translation files should not be included in PRs, as these are handled by WordPress.com. [See here for information on contributing to i18n efforts on WordPress.com](https://translate.wordpress.com/).

## Contributing code

Found a bug you can fix? Fantastic! Patches are always welcome. Here are a couple tips for crafting a great pull request:

* Include the purpose of your PR. Be explicit about the issue your PR solves.
* Reference any existing issues that relate to your PR. This allows everyone to easily see all related discussions.

By contributing code to our free themes, you grant its use under the [GNU General Public License v2 (or later)](LICENSE).

## Testing pull requests

### Using GitHub 

1. Clone repository locally `git clone git@github.com:Automattic/themes.git`
2. [Identify the branch](https://cloudup.com/cAy1j0D8tvH) of the pull request, e.g. `update/#1889` 
3. Check out featured branch of pull request, e.g. `git checkout update/#1889`
4. Symlink or copy affected theme OR zip affected theme and import into WordPress site

### Manually download

1. Identify and visit [the branch](https://cloudup.com/cAy1j0D8tvH) of the pull request.
2. Download featured branch of pull request, e.g. `https://github.com/Automattic/themes/archive/update/%231889.zip`
3. Unzip the zipped featured branch
4. Zip affected theme and import into WordPress site

**Note:** In case the affected theme already exists on the WordPress site, it needs to be deleted before the theme zip file gets uploaded.

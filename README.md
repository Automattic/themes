# Automattic Themes

The development repository for themes maintained by the [Automattic Theme Team](https://themeshaper.com/about/). 

## What's Here

We're committed to imagining and creating the future of themes. Our latest themes are [block themes](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) — they depend on the latest features available in the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/). Read about our latest themes built to support full-site editing [here](https://wordpress.com/blog/2022/03/09/customize-your-entire-site-with-new-block-themes/).

<img width="1399" alt="A gallery of block themes with a variety of styles" src="https://user-images.githubusercontent.com/5375500/159330814-8f8883f3-1cd4-44a6-a404-05c8f800ac93.png">

## Contributing

### Issues

Before submitting your issue, please search for an existing or related ticket [here](https://github.com/Automattic/themes/search).

Here are some tips to consider for writing a useful report:

* Share steps for replicating the issue. 
* Add screenshots and videos where helpful.
* Share your environment details, including what version of WordPress and Gutenberg you're using

### Code

Patches and ideas in the form of code are always welcome! Here are a couple tips for crafting a great pull request:

* Include the purpose of your PR. Be explicit about the idea or issue your PR solves.
* Reference any existing issues that relate to your PR. This allows everyone to easily see all related discussions.

By contributing code to our free themes, you grant its use under the [GNU General Public License v2 (or later)](LICENSE).

### Testing pull requests

#### Using GitHub

1. Clone repository locally `git clone git@github.com:Automattic/themes.git`
2. [Identify the branch](https://cloudup.com/cAy1j0D8tvH) of the pull request, e.g. `update/#1889`
3. Check out featured branch of pull request, e.g. `git checkout update/#1889`
4. Symlink or copy affected theme OR zip affected theme and import into WordPress site

#### Manually download

1. Identify and visit [the branch](https://cloudup.com/cAy1j0D8tvH) of the pull request.
2. Change the `/tree/` part of the branch's URL to `archive`, and add a `.zip` to the end to download a zip of the branch. e.g. `https://github.com/Automattic/themes/tree/update/%231889` would become `https://github.com/Automattic/themes/archive/update/%231889.zip`
3. Unzip the zipped featured branch
4. Zip affected theme and import into WordPress site

**Note:** In case the affected theme already exists on the WordPress site, it needs to be deleted before the theme zip file gets uploaded.

### Coding Standards

Themes code should adhere to the [WordPress coding standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/). This repo contains a pre-commit hook which enables you to detect and fix code that doesn't follow the standards.

To set this up follow these instructions:
1. Run `npm i` in the root of the repo.
2. Run `composer install`

Now when you commit changes to a file PHPCBF will attempt to fix any issues with the file.

This will also install the [WordPress-standard Prettier Configuration](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-prettier-config/) which can (optionally) be used in your IDE or command-line to format your code via (Prettier)[https://prettier.io/docs/en/editors.html].

### Packaging for WordPress.org Themes Showcase

The code in this repository mirrors the code needed for the theme to function correctly on _WordPress.com_. To prepare a theme.zip that passes the _WordPress.org_ theme review automated test, do the following:

- From the top-level directory, run `./package-dotorg.sh [theme-slug]`
- View the generated zip in the respective theme's sub-directory

Note that this script rebuilds the theme to strip it of .com-specific functionality, and discards any changes via git after doing so. _Make sure you have committed any working changes before running this script._

### Sandbox Tools

If you use a sandbox to test or develop your themes you can use a couple of utilities to operate on that sandbox.

- From the top-level directory, run `node ./theme-utils.mjs clean-sandbox` to bring the public themes GIT repository to a clean state.  (This will only matter if your sandbox uses GIT such as how _WordPress.com_ is currently managed.)  Alternately you can trigger that as an npm script: `npm run sandbox:clean`. `npm run sandbox:clean-all` will clean the entire sandbox.

- From the top-level directory, run `node ./theme-utils.mjs push-to-sandbox` to push your entire working copy to the public themes folder of your sandbox.  Alternately you can trigger this as an npm script: `npm run deploy:push:all` This command will rsync your local copy with the exception of anything in the `.sandbox-ignore` file. You should clean your sandbox before pushing any changes to it. `node ./theme-utils.mjs push-changes-to-sandbox` or `npm run deploy:push:changes` alternatively will push only files that have changed since the last deployment.

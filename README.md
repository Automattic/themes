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

Patches and ideas in the form of code are always welcome! A great way to get started is to work on a [CSS fix](https://github.com/Automattic/themes/blob/trunk/CONTRIBUTING.md#contributing-css) or a [Good First Issue](https://github.com/Automattic/themes/issues?q=is%3Aissue+is%3Aopen+label%3A%22good+first+issue%22). Please read our [full guide to contributing](https://github.com/Automattic/themes/blob/trunk/CONTRIBUTING.md) for more information.

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

### Packaging for WordPress.org Themes Showcase

The code in this repository mirrors the code needed for the theme to function correctly on _WordPress.com_. To prepare a theme.zip that passes the _WordPress.org_ theme review automated test, do the following:

- From the top-level directory, run `./package-dotorg.sh [theme-slug]`
- View the generated zip in the respective theme's sub-directory

Note that this script rebuilds the theme to strip it of .com-specific functionality, and discards any changes via git after doing so. _Make sure you have committed any working changes before running this script._

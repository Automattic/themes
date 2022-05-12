# Guide to Contributing Code

The following guide will help you through the process of contributing code to the themes repo.

## Prerequisites

Our repo is a [monorepo](https://en.wikipedia.org/wiki/Monorepo) which stores all the themes maintained by the Automattic Theme Team. We use [Node.js](https://nodejs.org/) to run utility functions from the root level, and also to run commands for some themes, such as building the CSS files. We are currently using Node version 16.

We recommend using the [Node Version Manager](https://github.com/nvm-sh/nvm) (nvm) since it is the easiest way to install and manage Node for macOS, Linux, and Windows 10. See the Node.js site for additional installation instructions.

Also make sure you have an updated version of git installed on your computer, as well as a GitHub account.

## Local Environment Setup

We recommend setting up a local WordPress environment to test any changes.

You can use the [wp-env package](https://github.com/WordPress/gutenberg/blob/trunk/packages/env/README.md) for setting up a WordPress environment locally. You'll need to install Docker to use wp-env.

As an alternative to Docker setup, you can use [Local](https://localwp.com/), [WampServer](http://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/), or even use a remote server.

## Local Themes Setup

Clone the repo locally and then install the dependencies:

```bash
$ git clone git@github.com:Automattic/themes.git
$ cd themes
$ npm install
```

## Coding Standards

Themes code should adhere to the [WordPress coding standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/). This repo contains a pre-commit hook which enables you to detect and fix code that doesn't follow the standards.

To set this up follow these instructions:
1. Run `npm install` in the root of the repo.
2. Run `composer install`

Now when you commit changes to a file PHPCBF will attempt to fix any issues with the file.

This will also install the [WordPress-standard Prettier Configuration](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-prettier-config/) which can (optionally) be used in your IDE or command-line to format your code via [Prettier](https://prettier.io/docs/en/editors.html).

### Browser Support

We support the same browsers as WordPress Core, [listed here](https://make.wordpress.org/core/handbook/best-practices/browser-support/).

## Contributing CSS

A great way to get started with contributing to our themes is to pick up a CSS fix or patch.

A lot of our themes use SASS for styling, and then use Node to compile the final CSS. Usually, these themes will have a `sass` directory ([example](https://github.com/Automattic/themes/tree/trunk/varia/sass)), and there will also be a `package.json` file at the root ([example](https://github.com/Automattic/themes/blob/trunk/varia/package.json)).

In order to change the styles in these themes, you need to edit the SASS file first, and then run a build command to compile the CSS. Here is the process in most cases, using Varia as an example:

1. Change to the theme's directory `cd varia`
2. Find the `.scss` file you need to edit in the `sass` directory
3. Make your changes
4. Run the build command using `npm run build`
5. You should see your updates in the newly built `.css` file/s

Please refer to either the themes readme or the themes `package.json` file for theme specific instructions.

### Best Practices

We use the latest features from the CSS, HTML and JS specifications, where our browser support will allow it. [Caniuse.com](https://caniuse.com/) is a great way to check if a feature is supported.

We use intrinsic web design in our themes where possible. [Every Layout](https://every-layout.dev/rudiments/boxes/) is a good resource for this.

## Sandbox Tools

If you use a sandbox to test or develop your themes you can use a couple of utilities to operate on that sandbox.

- From the top-level directory, run `node ./theme-utils.mjs clean-sandbox` to bring the public themes GIT repository to a clean state.  (This will only matter if your sandbox uses GIT such as how _WordPress.com_ is currently managed.)  Alternately you can trigger that as an npm script: `npm run sandbox:clean`. `npm run sandbox:clean-all` will clean the entire sandbox.

- From the top-level directory, run `node ./theme-utils.mjs push-to-sandbox` to push your entire working copy to the public themes folder of your sandbox.  Alternately you can trigger this as an npm script: `npm run deploy:push:all` This command will rsync your local copy with the exception of anything in the `.sandbox-ignore` file. You should clean your sandbox before pushing any changes to it. `node ./theme-utils.mjs push-changes-to-sandbox` or `npm run deploy:push:changes` alternatively will push only files that have changed since the last deployment.

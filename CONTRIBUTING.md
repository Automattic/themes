# Guide to Contributing Code

The following guide will help you through the process of contributing code to the themes repo.

## Prerequisites

Our repo is a [monorepo](https://en.wikipedia.org/wiki/Monorepo) which stores all the themes maintained by the Automattic Theme Team. We use [Node.js](https://nodejs.org/) to run utility functions from the root level, and also to run commands for some themes, such as building the CSS files. We are currently using version 16.

We recommend using the [Node Version Manager](https://github.com/nvm-sh/nvm) (nvm) since it is the easiest way to install and manage node for macOS, Linux, and Windows 10 using WSL2. See the Node.js site for additional installation instructions.

Also make sure you have an updated version of git installed on your computer, as well as a GitHub account.

## Local Environment Setup

We recommend setting up a local WordPress environment to test any changes.

You can use the [wp-env package](https://github.com/WordPress/gutenberg/blob/trunk/packages/env/README.md) for setting up a WordPress environment locally. You'll need to install Docker to use wp-env.

As an alternative to Docker setup, you can use [Local](https://localwp.com/), [WampServer](http://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/), or even use a remote server.

## Local Themes Setup

1. Clone repository locally `git clone git@github.com:Automattic/themes.git`
2. Install the repo dependencies by running `npm install` in the root of the repo



## Coding Standards

Themes code should adhere to the [WordPress coding standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/). This repo contains a pre-commit hook which enables you to detect and fix code that doesn't follow the standards.

To set this up follow these instructions:
1. Run `npm i` in the root of the repo.
2. Run `composer install`

Now when you commit changes to a file PHPCBF will attempt to fix any issues with the file.

This will also install the [WordPress-standard Prettier Configuration](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-prettier-config/) which can (optionally) be used in your IDE or command-line to format your code via [Prettier](https://prettier.io/docs/en/editors.html).

## CSS Fixes

A great way to get started with contributing to our themes is to pick up a CSS fix or patch.

## Testing

We tset in the latest version of the following browsers

We also test in resolutions...

## Sandbox Tools

If you use a sandbox to test or develop your themes you can use a couple of utilities to operate on that sandbox.

- From the top-level directory, run `node ./theme-utils.mjs clean-sandbox` to bring the public themes GIT repository to a clean state.  (This will only matter if your sandbox uses GIT such as how _WordPress.com_ is currently managed.)  Alternately you can trigger that as an npm script: `npm run sandbox:clean`. `npm run sandbox:clean-all` will clean the entire sandbox.

- From the top-level directory, run `node ./theme-utils.mjs push-to-sandbox` to push your entire working copy to the public themes folder of your sandbox.  Alternately you can trigger this as an npm script: `npm run deploy:push:all` This command will rsync your local copy with the exception of anything in the `.sandbox-ignore` file. You should clean your sandbox before pushing any changes to it. `node ./theme-utils.mjs push-changes-to-sandbox` or `npm run deploy:push:changes` alternatively will push only files that have changed since the last deployment.

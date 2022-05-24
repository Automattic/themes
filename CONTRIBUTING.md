# Guide to Contributing Code

The following guide will help you through the process of contributing code to the themes repo.

By contributing code to our free themes, you grant its use under the [GNU General Public License v2 (or later)](LICENSE).
## Prerequisites

Our repo is a [monorepo](https://en.wikipedia.org/wiki/Monorepo) which stores all the themes maintained by the Automattic Theme Team. We use [Node.js](https://nodejs.org/) to run utility functions from the top-level directory, and also to run commands for some themes, such as building the CSS files. We are currently using Node version 16.

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

A lot of our themes use SASS for styling, and then use Node to compile the final CSS. Usually, these themes will have a `sass` directory ([example](https://github.com/Automattic/themes/tree/trunk/varia/sass)), and there will also be a `package.json` file at the root of the theme ([example](https://github.com/Automattic/themes/blob/trunk/varia/package.json)).

In order to change the styles in these themes, you need to edit the SASS file first, and then run a build command to compile the CSS. Here is the process in most cases, using Varia as an example:

1. Change to the theme's directory `cd varia`
2. Find the `.scss` file you need to edit in the `sass` directory
3. Make your changes
4. Run the build command using `npm run build`
5. You should see your updates in the newly built `.css` file/s

If you are unsure what to do, leave us a comment so that we can improve documentation for other themes that may work differently.

### Best Practices

We use the latest features from the CSS, HTML and JS specifications, where our browser support will allow it. [Caniuse.com](https://caniuse.com/) is a great way to check if a feature is supported.

We use intrinsic web design in our themes where possible. [Every Layout](https://every-layout.dev/rudiments/boxes/) is a good resource for this.

## Workflow

Here is a quick summary of our workflow:

1. Create a pull request with your changes
2. Request a review of your PR
3. The Themes Team will provide feedback or approve your PR
4. The team will merge and deploy your PR (to both .com and .org)

### Creating a pull request

When your changes are ready for review you should create a pull request. Here are a couple tips for crafting a great pull request:

* Include the purpose of your PR. Be explicit about the idea or issue your PR solves.
* Reference any existing issues that relate to your PR. This allows everyone to easily see all related discussions.

The Themes Team will be notified when a new pull request is opened and we triage new issues and PRs regularly. Another good way to request a review is to add the team as Reviewers to your PR using the team handle, @Automattic/theam.

Once your PR has been approved, the Themes Team will merge and deploy your change to both .com and .org. **Please note that merging a PR does not automatically deploy a change.**

## Deployments

The easiest way to deploy a change is to let the Themes Team handle it! This is because not everyone has a sandbox or the appropriate commit rights to handle a deployment. 

Deploying changes is part of the team's daily processes. We try to deploy approved changes as soon as possible, often multiple times a day. Please leave a comment if you have any questions or you want us to trigger a deploy.

### Triggering a deployment

If you have a sandbox and have the correct commit rights, you can use one of our sandbox tools to trigger your own deployment.

From the top-level directory, run `npm run deploy` and follow the prompts. Please make sure to test your changes on your sandbox before completing the deployment.

## Sandbox Tools

If you use a sandbox to test or develop your themes you can use a couple of utilities to operate on that sandbox.

- From the top-level directory, run `node ./theme-utils.mjs clean-sandbox` to bring the public themes GIT repository to a clean state.  (This will only matter if your sandbox uses GIT such as how _WordPress.com_ is currently managed.)  Alternately you can trigger that as an npm script: `npm run sandbox:clean`. `npm run sandbox:clean-all` will clean the entire sandbox.

- From the top-level directory, run `node ./theme-utils.mjs push-to-sandbox` to push your entire working copy to the public themes folder of your sandbox.  Alternately you can trigger this as an npm script: `npm run deploy:push:all` This command will rsync your local copy with the exception of anything in the `.sandbox-ignore` file. You should clean your sandbox before pushing any changes to it. `node ./theme-utils.mjs push-changes-to-sandbox` or `npm run deploy:push:changes` alternatively will push only files that have changed since the last deployment.

# Seedlet

Seedlet is simple, text-driven WordPress theme.

![](https://github.com/Automattic/themes/raw/master/seedlet/screenshot.png)

Along with being an excellent standalone theme, Seedlet is designed to be a parent-theme that allows folks to quickly create Gutenberg-ready child-themes for WordPress. *[Instructions for how to make child themes are coming soon]*

## Technical Overview

### Principles

When you reduce a theme design down to a set of systematic design decisions, you end up with something called a _Style Guide_. The Seedlet system works by taking the rules of a Style Guide and expressing them through carefully placed variables or _design tokens_ that influence the appearance of a WordPress site. 

This unifies the design decisions needed to style the aesthetic appearance of Gutenberg Blocks, the theme Header + Footer areas, WooCommerce, Jetpack and more. It also syncs styles between the editor and the frontend so that you don’t need to hand-write CSS for both. This greatly speeds up the Gutenberg theme development process and reduces the amount of manual styling that typically goes into developing a theme. 

### Controls

The theme is built to offer the following controls: 

- **Fonts** - Font-family, size, weight, and line-height rules. 
- **Colors** - Primary, secondary, background, foreground and border colors. 
- **Spacing** - A default 8px vertical rhythm between all blocks and major components. It also includes utility spacing classes for negative margins.
- **Responsive Logic** - Built-in responsive behavior across Blocks and Components.

### Structure

The system itself lives in the `/seedlet/sass` directory as a collection of Sass partials broken up by scope and hierarchy. The partials get compiled down to singular CSS files that live in the main Seedlet directory and cascade downward like so:

**Frontend** 
- `/seedlet/variables.css`
- `/seedlet/style.css`

**Editor** 
- `/seedlet/variables-editor.css`
- `/seedlet/style-editor.css`

In each view, the variables are loaded first and then the stylesheet is loaded which applies the variables.

## License

GNU General Public License v2 or later.

URI: [LICENSE](https://github.com/Automattic/themes/blob/master/seedlet/LICENSE)

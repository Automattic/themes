# Theme created by Theme-Gen

This was a theme created by Theme-Gen, a CLI utility that takes an existing
theme and a starter site, and makes a new theme by copying the existing theme
and applying small changes to it from what it can see on the starter site.

For example, if I have the blank-canvas theme and
a https://fredricksonstarter.wordpress.com/ starter site that contains
a homepage design with font and color settings, I can create a new fredrickson
theme.

## Commands

To create my-new-theme based on blank-canvas and
fredricksonstarter.wordpress.com:

```
wp --require=wp-content/lib/theme-gen/init.php theme-gen fredricksonstarter.wordpress.com blank-canvas my-new-theme
```

To run unit tests:

```
cd ~/public_html/bin/tests/isolated && phpunit --testsuite=theme-gen
```

## More Information

- PCYsg-yPL-p2
- D62155-code
- https://github.com/Automattic/wp-calypso/issues/52848
- pd2qbF-l-p2

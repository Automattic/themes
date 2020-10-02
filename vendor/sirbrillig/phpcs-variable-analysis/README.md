# PHP_CodeSniffer VariableAnalysis

[![CircleCI](https://circleci.com/gh/sirbrillig/phpcs-variable-analysis.svg?style=svg)](https://circleci.com/gh/sirbrillig/phpcs-variable-analysis)

Plugin for PHP_CodeSniffer static analysis tool that adds analysis of problematic variable use.

- Warns if variables are used without being defined. (Sniff code: `VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable`)
- Warns if variables are set or declared but never used. (Sniff code: `VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable`)
- Warns if `$this`, `self::$static_member`, `static::$static_member` is used outside class scope. (Sniff codes: `VariableAnalysis.CodeAnalysis.VariableAnalysis.SelfOutsideClass` or `VariableAnalysis.CodeAnalysis.VariableAnalysis.StaticOutsideClass`)

## Installation

### Requirements

VariableAnalysis requires PHP 5.4 or higher and [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) version 3.1.0 or higher.


### With PHPCS Composer Installer

This is the easiest method.

First, install [phpcodesniffer-composer-installer](https://github.com/DealerDirect/phpcodesniffer-composer-installer) for your project if you have not already. This will also install PHPCS.

```
composer require --dev dealerdirect/phpcodesniffer-composer-installer
```

Then install these standards.

```
composer require --dev sirbrillig/phpcs-variable-analysis
```

You can then include the sniffs by adding a line like the following to [your phpcs.xml file](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file).

```
<rule ref="VariableAnalysis"/>
```

It should just work after that!

### Standalone

1. Install PHP_CodeSniffer by following its [installation instructions](https://github.com/squizlabs/PHP_CodeSniffer#installation) (via Composer, Phar file, PEAR, or Git checkout).

   Do ensure that PHP_CodeSniffer's version matches our [requirements](#requirements)

2. Download and uncompress the latest release:

Click to download either the zip or tar.gz file from [the latest release page](https://github.com/sirbrillig/phpcs-variable-analysis/releases/latest). Expand the file and rename the resulting directory to `VariableAnalysis`.

3. Add its path to the PHP_CodeSniffer configuration:

        phpcs --config-set installed_paths /path/to/VariableAnalysis

If you already have installed paths, [use a comma to separate them](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Configuration-Options#setting-the-installed-standard-paths).

## Customization

There's a variety of options to customize the behaviour of VariableAnalysis, take a look at the included ruleset.xml.example for commented examples of a configuration.

The available options are as follows:

- `allowUnusedFunctionParameters` (bool, default `false`): if set to true, function arguments will never be marked as unused.
- `allowUnusedCaughtExceptions` (bool, default `true`): if set to true, caught Exception variables will never be marked as unused.
- `allowUnusedParametersBeforeUsed` (bool, default `true`): if set to true, unused function arguments will be ignored if they are followed by used function arguments.
- `validUnusedVariableNames` (string, default `null`): a space-separated list of names of placeholder variables that you want to ignore from unused variable warnings. For example, to ignore the variables `$junk` and `$unused`, this could be set to `'junk unused'`.
- `ignoreUnusedRegexp` (string, default `null`): a PHP regexp string (note that this requires explicit delimiters) for variables that you want to ignore from unused variable warnings. For example, to ignore the variables `$_junk` and `$_unused`, this could be set to `'/^_/'`.
- `validUndefinedVariableNames` (string, default `null`): a space-separated list of names of placeholder variables that you want to ignore from undefined variable warnings. For example, to ignore the variables `$post` and `$undefined`, this could be set to `'post undefined'`.
- `allowUnusedForeachVariables` (bool, default `true`): if set to true, unused values from the `key => value` syntax in a `foreach` loop will never be marked as unused.
- `sitePassByRefFunctions` (string, default `null`): a list of custom functions which pass in variables to be initialized by reference (eg `preg_match()`) and therefore should not require those variables to be defined ahead of time. The list is space separated and each entry is of the form `functionName:1,2`. The function name comes first followed by a colon and a comma-separated list of argument numbers (starting from 1) which should be considered variable definitions. The special value `...` in the arguments list will cause all arguments after the last number to be considered variable definitions.
- `allowWordPressPassByRefFunctions` (bool, default `false`): if set to true, a list of common WordPress pass-by-reference functions will be added to the list of PHP ones so that passing undefined variables to these functions (to be initialized by reference) will be allowed.

To set these these options, you must use XML in your ruleset. For details, see the [phpcs customizable sniff properties page](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Customisable-Sniff-Properties). Here is an example that ignores all variables that start with an underscore:

```xml
<rule ref="VariableAnalysis.CodeAnalysis.VariableAnalysis">
    <properties>
        <property name="ignoreUnusedRegexp" value="/^_/"/>
    </properties>
</rule>
```

## See Also

- [ImportDetection](https://github.com/sirbrillig/phpcs-import-detection): A set of phpcs sniffs to look for unused or unimported symbols.
- [phpcs-changed](https://github.com/sirbrillig/phpcs-changed): Run phpcs on files, but only report warnings/errors from lines which were changed.


## Original

This was forked from the excellent work in https://github.com/illusori/PHP_Codesniffer-VariableAnalysis

## Contributing

Please open issues or PRs on this repository.

Any changes should be accompanied by tests and should pass linting and static analysis. Please use phpdoc (rather than actual types) for declaring types since this must run in PHP 5.4.

To run tests, make sure composer is installed, then run:

```
composer install # you only need to do this once
composer test
```

To run linting, use:

```
composer lint
composer lint-self
```

To run static analysis, use:

```
composer phpstan
```

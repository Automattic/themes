Run [phpcs](https://github.com/squizlabs/PHP_CodeSniffer) on files and only report new warnings/errors compared to the previous version.

This is both a PHP library that can be used manually as well as a CLI script that you can just run on your files.

## What is this for?

Let's say that you need to add a feature to a large legacy file which has many phpcs errors. If you try to run phpcs on that file, there is so much noise it's impossible to notice any errors which you may have added yourself.

Using this script you can get phpcs output which applies only to the changes you have made and ignores the unchanged errors.

## Installation

```
composer global require sirbrillig/phpcs-changed
```

## CLI Usage

👩‍💻👩‍💻👩‍💻

To make this work, you need to be able to provide data about the previous version of your code. `phpcs-changed` can get this data itself if you use svn or git, or you can provide it manually.

Here's an example using `phpcs-changed` with the `--svn` option:

```
phpcs-changed --svn file.php
```

If you wanted to use svn and phpcs manually, this produces the same output:

```
svn diff file.php > file.php.diff
svn cat file.php | phpcs --report=json -q > file.php.orig.phpcs
cat file.php | phpcs --report=json -q > file.php.phpcs
phpcs-changed --diff file.php.diff --phpcs-orig file.php.orig.phpcs --phpcs-new file.php.phpcs
```

Both will output something like:

```
FILE: file.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 76 | WARNING | Variable $foobar is undefined.
-----------------------------------------------------------------------------------------------
```

Or, with `--report json`:

```json
{
  "totals": {
    "errors": 0,
    "warnings": 1,
    "fixable": 0
  },
  "files": {
    "file.php": {
      "errors": 0,
      "warnings": 1,
      "messages": [
        {
          "line": 76,
          "message": "Variable $foobar is undefined.",
          "source": "VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable",
          "severity": 5,
          "fixable": false,
          "type": "WARNING",
          "column": 8
        }
      ]
    }
  }
}
```

If the file was versioned by git, we can do the same with the `--git` option:

```
phpcs-changed --git --git-unstaged file.php
```

You should specify `--git-staged` or `--git-unstaged` to tell `phpcs-changed` if you want to compare the current staged changes or the current working copy changes, respectively. The default is `--git-staged`.

Alternatively, if you want to compare the current committed HEAD changes to another branch, you can use the `--git-branch` option followed by a branch name:

```
git checkout add-new-feature
phpcs-changed --git --git-branch master file.php
```

### CLI Options

More than one file can be specified after a version control option, including globs and directories. If any file is a directory, phpcs-changed will scan the directory for all files ending in `.php` and process them. For example: `phpcs-changed --git src/lib test/**/*.php` will operate on all the php files in the `src/lib/` and `test/` directories.

You can use `--report` to customize the output type. `full` (the default) is human-readable and `json` prints a JSON object as shown above. These match the phpcs reporters of the same names.

You can use `--standard` to specify a specific phpcs standard to run. This matches the phpcs option of the same name.

You can also use the `-s` option to Always show sniff codes after each error in the full reporter. This matches the phpcs option of the same name.

## PHP Library

🐘🐘🐘

### getNewPhpcsMessagesFromFiles

This library exposes a function `PhpcsMessages\getNewPhpcsMessagesFromFiles()` which takes three arguments:

- A file path containing the full unified diff of a single file.
- A file path containing the messages resulting from running phpcs on the file before your recent changes.
- A file path containing the messages resulting from running phpcs on the file after your recent changes.

It will return an instance of `PhpcsMessages` which is a filtered list of the third argument above where every line that was present in the second argument has been removed.

`PhpcsMessages` represents the output of running phpcs.

To read the phpcs JSON output from an instance of `PhpcsMessages`, you can use the `toPhpcsJson()` method. For example:

```php
use function PhpcsChanged\getNewPhpcsMessagesFromFiles;

$changedMessages = getNewPhpcsMessagesFromFiles(
	$unifiedDiffFileName,
	$oldFilePhpcsOutputFileName,
	$newFilePhpcsOutputFileName
);

echo $changedMessages->toPhpcsJson();
```

This will output something like:

```json
{
  "totals": {
    "errors": 0,
    "warnings": 1,
    "fixable": 0
  },
  "files": {
    "file.php": {
      "errors": 0,
      "warnings": 1,
      "messages": [
        {
          "line": 20,
          "type": "WARNING",
          "severity": 5,
          "fixable": false,
          "column": 5,
          "source": "ImportDetection.Imports.RequireImports.Import",
          "message": "Found unused symbol Foobar."
        }
      ]
    }
  }
}
```

### getNewPhpcsMessages

If the previous function is not sufficient, this library exposes a lower-level function `PhpcsMessages\getNewPhpcsMessages()` which takes three arguments:

- (string) The full unified diff of a single file.
- (PhpcsMessages) The messages resulting from running phpcs on the file before your recent changes.
- (PhpcsMessages) The messages resulting from running phpcs on the file after your recent changes.

It will return an instance of `PhpcsMessages` which is a filtered list of the third argument above where every line that was present in the second argument has been removed.

You can create an instance of `PhpcsMessages` from real phpcs JSON output by using `PhpcsMessages::fromPhpcsJson()`. The following example produces the same output as the previous one:

```php
use function PhpcsChanged\getNewPhpcsMessages;
use function PhpcsChanged\getNewPhpcsMessagesFromFiles;
use PhpcsChanged\PhpcsMessages;

$changedMessages = getNewPhpcsMessagesFromFiles(
     $unifiedDiffFileName,
     $oldFilePhpcsOutputFileName,
     $newFilePhpcsOutputFileName
);

echo $changedMessages->toPhpcsJson();
```

### Multiple files

You can combine the results of `getNewPhpcsMessages` or `getNewPhpcsMessagesFromFiles` by using `PhpcsChanged\PhpcsMessages::merge()` which takes an array of `PhpcsMessages` instances and merges them into one instance. For example:

```php
use function PhpcsChanged\getNewPhpcsMessages;
use function PhpcsChanged\getNewPhpcsMessagesFromFiles;
use PhpcsChanged\PhpcsMessages;

$changedMessagesA = getNewPhpcsMessages(
     $unifiedDiffA,
     PhpcsMessages::fromPhpcsJson($oldFilePhpcsOutputA),
     PhpcsMessages::fromPhpcsJson($newFilePhpcsOutputA)
$changedMessagesB = getNewPhpcsMessagesFromFiles(
     $unifiedDiffFileNameB,
     $oldFilePhpcsOutputFileNameB,
     $newFilePhpcsOutputFileNameB
);

$changedMessages = PhpcsMessages::merge([$changedMessagesA, $changedMessagesB]);

echo $changedMessages->toPhpcsJson();
```

## Running Tests

Run the following commands in this directory to run the built-in test suite:

```
composer install
composer test
```

You can also run linting and static analysis:

```
composer lint
composer phpstan
```

## Inspiration

This was inspired by the amazing work in https://github.com/Automattic/phpcs-diff

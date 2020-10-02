<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';
require_once __DIR__ . '/helpers/helpers.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\PhpcsMessages;
use PhpcsChanged\ShellOperator;
use PhpcsChanged\ShellException;
use PhpcsChangedTests\TestShell;
use function PhpcsChanged\Cli\runGitWorkflow;
use function PhpcsChanged\GitWorkflow\{isNewGitFile, getGitUnifiedDiff};


final class GitWorkflowTest extends TestCase {
	public function testIsNewGitFileReturnsTrueForNewFile() {
		$gitFile = 'foobar.php';
		$git = 'git';
		$executeCommand = function($command) {
			if (false !== strpos($command, "git status --short 'foobar.php'")) {
				return 'A foobar.php';
			}
		};
		$this->assertTrue(isNewGitFile($gitFile, $git, $executeCommand, array(), '\PhpcsChangedTests\Debug'));
	}

	public function testIsNewGitFileReturnsFalseForOldFile() {
		$gitFile = 'foobar.php';
		$git = 'git';
		$executeCommand = function($command) {
			if (false !== strpos($command, "git status --short 'foobar.php'")) {
				return ' M foobar.php'; // note the leading space
			}
		};
		$this->assertFalse(isNewGitFile($gitFile, $git, $executeCommand, array(), '\PhpcsChangedTests\Debug'));
	}

	public function testGetGitUnifiedDiff() {
		$gitFile = 'foobar.php';
		$git = 'git';
		$diff = <<<EOF
diff --git bin/foobar.php bin/foobar.php
index 038d718..d6c3357 100644
--- bin/foobar.php
+++ bin/foobar.php
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$executeCommand = function($command) use ($diff) {
			if (! $command || false === strpos($command, "git diff --staged --no-prefix 'foobar.php'")) {
				return '';
			}
			return $diff;
		};
		$this->assertEquals($diff, getGitUnifiedDiff($gitFile, $git, $executeCommand, [], '\PhpcsChangedTests\Debug'));
	}

	public function testFullGitWorkflowForOneFile() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
index 038d718..d6c3357 100644
--- bin/foobar.php
+++ bin/foobar.php
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", ' M foobar.php'); // note the leading space
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'foobar.php')", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":21,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 20,
				'message' => 'Found unused symbol Emergent.',
			],
		], 'bin/foobar.php');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForOneFileUnstaged() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
index 038d718..d6c3357 100644
--- bin/foobar.php
+++ bin/foobar.php
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", ' M foobar.php'); // note the leading space
		$shell->registerCommand("git show :0:$(git ls-files --full-name 'foobar.php')", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":21,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = ['git-unstaged' => '1'];
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 20,
				'message' => 'Found unused symbol Emergent.',
			],
		], 'bin/foobar.php');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForMultipleFiles() {
		$gitFiles = ['foobar.php', 'baz.php'];
		$shell = new TestShell($gitFiles);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
index 038d718..d6c3357 100644
--- bin/foobar.php
+++ bin/foobar.php
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$fixture = <<<EOF
diff --git bin/baz.php bin/baz.php
index 038d718..d6c3357 100644
--- bin/baz.php
+++ bin/baz.php
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Baz;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'baz.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", ' M foobar.php'); // note the leading space
		$shell->registerCommand("git status --short 'baz.php'", ' M baz.php'); // note the leading space
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'foobar.php')", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'baz.php')", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":21,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'baz.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."},{"line":21,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."}]}}}');
		$options = [];
		$expected = PhpcsMessages::merge([
			PhpcsMessages::fromArrays([
				[
					'type' => 'ERROR',
					'severity' => 5,
					'fixable' => false,
					'column' => 5,
					'source' => 'ImportDetection.Imports.RequireImports.Import',
					'line' => 20,
					'message' => 'Found unused symbol Emergent.',
				],
			], 'bin/foobar.php'),
			PhpcsMessages::fromArrays([
				[
					'type' => 'ERROR',
					'severity' => 5,
					'fixable' => false,
					'column' => 5,
					'source' => 'ImportDetection.Imports.RequireImports.Import',
					'line' => 20,
					'message' => 'Found unused symbol Baz.',
				],
			], 'bin/baz.php'),
		]);
		$messages = runGitWorkflow($gitFiles, $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForUnchangedFileWithPhpcsMessages() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", '');
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'foobar.php')", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([], '/dev/null');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForUnchangedFileWithoutPhpcsMessages() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", '');
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'foobar.php')", '{"totals":{"errors":0,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":0,"messages":[]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":0,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":0,"messages":[]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([], '/dev/null');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForNonGitFile() {
		$this->expectException(ShellException::class);
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", "?? foobar.php" );
		$shell->registerCommand("git show HEAD:$(git ls-files --full-name 'foobar.php')", "fatal: Path 'foobar.php' exists on disk, but not in 'HEAD'.", 128);
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
	}

	public function testFullGitWorkflowForNewFile() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
new file mode 100644
index 0000000..efa970f
--- /dev/null
+++ bin/foobar.php
@@ -0,0 +1,8 @@
+<?php
+use Billing\Purchases\Order;
+use Billing\Services;
+use Billing\Ebanx;
+use Foobar;
+use Billing\Emergent;
+use Billing\Monetary_Amount;
+use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'",'A foobar.php');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":4,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":5,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 4,
				'message' => 'Found unused symbol Emergent.',
			],
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 5,
				'message' => 'Found unused symbol Emergent.',
			],
		], 'bin/foobar.php');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullGitWorkflowForEmptyNewFile() {
		$gitFile = 'foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
new file mode 100644
index 0000000..efa970f
--- /dev/null
+++ bin/foobar.php
@@ -0,0 +1,8 @@
+<?php
+use Billing\Purchases\Order;
+use Billing\Services;
+use Billing\Ebanx;
+use Foobar;
+use Billing\Emergent;
+use Billing\Monetary_Amount;
+use Stripe\Error;
EOF;
		$shell->registerCommand("git diff --staged --no-prefix 'foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'foobar.php'", 'A foobar.php');
		$fixture ='ERROR: You must supply at least one file or directory to process.

Run "phpcs --help" for usage information
';
		$shell->registerCommand("cat 'foobar.php'", $fixture, 1);

		$options = [];
		$expected = PhpcsMessages::fromArrays([], '/dev/null');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	function testFullGitWorkflowForInterBranchDiff() {
		$gitFile = 'bin/foobar.php';
		$shell = new TestShell([$gitFile]);
		$fixture = <<<EOF
diff --git bin/foobar.php bin/foobar.php
index c012707..319ecf3 100644
--- bin/foobar.php
+++ bin/foobar.php
@@ -3,6 +3,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("git diff 'master'... --no-prefix 'bin/foobar.php'", $fixture);
		$shell->registerCommand("git status --short 'bin/foobar.php'", '');
		$shell->registerCommand("git cat-file -e 'master':'bin/foobar.php'", '');
		$shell->registerCommand("git show 'master':$(git ls-files --full-name 'bin/foobar.php') | phpcs --report=json -q --stdin-path='bin/foobar.php' -", '{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"\/srv\/www\/wordpress-default\/public_html\/test\/bin\/foobar.php":{"errors":0,"warnings":1,"messages":[{"message":"Found unused symbol '."'Billing\\\\Emergent'".'","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":6,"column":5}]}}}');
		$shell->registerCommand("cat 'bin/foobar.php' | phpcs --report=json -q --stdin-path='bin/foobar.php' -", '{"totals":{"errors":0,"warnings":2,"fixable":0},"files":{"\/srv\/www\/wordpress-default\/public_html\/test\/bin\/foobar.php":{"errors":0,"warnings":2,"messages":[{"message":"Found unused symbol '."'Foobar'".'.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":6,"column":5},{"message":"Found unused symbol '."'Billing\\\\Emergent'".'.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":7,"column":5}]}}}');
		$options = [ 'git-branch' => 'master' ];
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 6,
				'message' => "Found unused symbol 'Foobar'.",
			],
		], 'bin/foobar.php');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	function testNameDetectionInFullGitWorkflowForInterBranchDiff() {
		$gitFile = 'test.php';
		$shell = new TestShell([$gitFile]);
		$shell->registerCommand("git status --short 'test.php'", ' M test.php');
		
		$fixture = <<<EOF
diff --git test.php test.php
new file mode 100644
index 0000000..b3d9bbc
--- /dev/null
+++ test.php
@@ -0,0 +1 @@
+<?php

EOF;
		$shell->registerCommand("git diff 'master'... --no-prefix 'test.php'", $fixture);
		$shell->registerCommand("git cat-file -e 'master':'test.php'", '', 128);
		$shell->registerCommand("cat 'test.php' | phpcs --report=json -q --stdin-path='test.php' -", '{"totals":{"errors":0,"warnings":3,"fixable":0},"files":{"\/srv\/www\/wordpress-default\/public_html\/test\/test.php":{"errors":0,"warnings":3,"messages":[{"message":"Found unused symbol ' . "'Foobar'" . '.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":6,"column":5},{"message":"Found unused symbol ' . "'Foobar'" . '.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":7,"column":5},{"message":"Found unused symbol ' . "'Billing\\\\Emergent'" . '.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"fixable":false,"type":"WARNING","line":8,"column":5}]}}}');
		$options = [ 'git-branch' => 'master' ];
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 6,
				'message' => "Found unused symbol 'Foobar'.",
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 7,
				'message' => "Found unused symbol 'Foobar'.",
				
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 8,
				'message' => "Found unused symbol 'Billing\Emergent'.",
			],
		], 'test.php');
		$messages = runGitWorkflow([$gitFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}
}

<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';
require_once __DIR__ . '/helpers/helpers.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\PhpcsMessages;
use PhpcsChanged\ShellOperator;
use PhpcsChanged\ShellException;
use PhpcsChangedTests\TestShell;
use function PhpcsChanged\Cli\runSvnWorkflow;
use function PhpcsChanged\SvnWorkflow\{isNewSvnFile, getSvnUnifiedDiff};

final class SvnWorkflowTest extends TestCase {
	public function testIsNewSvnFileReturnsTrueForNewFile() {
		$svnFile = 'foobar.php';
		$svn = 'svn';
		$executeCommand = function($command) {
			if (! $command || false === strpos($command, "svn info 'foobar.php'")) {
				return '';
			}
			return "Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Node Kind: file
Schedule: add
";
		};
		$this->assertTrue(isNewSvnFile($svnFile, $svn, $executeCommand, '\PhpcsChangedTests\Debug'));
	}

	public function testIsNewSvnFileReturnsFalseForOldFile() {
		$svnFile = 'foobar.php';
		$svn = 'svn';
		$executeCommand = function($command) {
			if (! $command || false === strpos($command, "svn info 'foobar.php'")) {
				return '';
			}
			return "Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
";
		};
		$this->assertFalse(isNewSvnFile($svnFile, $svn, $executeCommand, '\PhpcsChangedTests\Debug'));
	}

	public function testGetSvnUnifiedDiff() {
		$svnFile = 'foobar.php';
		$svn = 'svn';
		$diff = <<<EOF
Index: foobar.php
===================================================================
--- bin/foobar.php	(revision 183265)
+++ bin/foobar.php	(working copy)
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
			if (! $command || false === strpos($command, "svn diff 'foobar.php'")) {
				return '';
			}
			return $diff;
		};
		$this->assertEquals($diff, getSvnUnifiedDiff($svnFile, $svn, $executeCommand, '\PhpcsChangedTests\Debug'));
	}

	public function testFullSvnWorkflowForOneFile() {
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
Index: foobar.php
===================================================================
--- bin/foobar.php	(revision 183265)
+++ bin/foobar.php	(working copy)
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
		$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
		$shell->registerCommand("svn cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
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
		$messages = runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullSvnWorkflowForMultipleFiles() {
		$svnFiles = ['foobar.php', 'baz.php'];
		$shell = new TestShell($svnFiles);
		$fixture = <<<EOF
Index: foobar.php
===================================================================
--- bin/foobar.php	(revision 183265)
+++ bin/foobar.php	(working copy)
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
		$fixture = <<<EOF
Index: baz.php
===================================================================
--- bin/baz.php	(revision 183265)
+++ bin/baz.php	(working copy)
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Baz;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$shell->registerCommand("svn diff 'baz.php'", $fixture);
		$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
		$fixture = <<<EOF
Path: baz.php
Name: baz.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/baz.php
Relative URL: ^/trunk/baz.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
EOF;
		$shell->registerCommand("svn info 'baz.php'", $fixture);
		$shell->registerCommand("svn cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":2,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":21,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("svn cat 'baz.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Baz."}]}}}');
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
		$messages = runSvnWorkflow($svnFiles, $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullSvnWorkflowForUnchangedFileWithPhpCsMessages() {
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
					$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
		$shell->registerCommand("svn cat 'foobar.php'|phpcs", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'|phpcs", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([], 'STDIN');
		$messages = runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullSvnWorkflowForUnchangedFileWithoutPhpCsMessages() {
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
		$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/wp-content/mu-plugins/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Revision: 188280
Node Kind: file
Schedule: normal
Last Changed Author: me
Last Changed Rev: 175729
Last Changed Date: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Text Last Updated: 2018-05-22 17:34:00 +0000 (Tue, 22 May 2018)
Checksum: abcdefg
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
		$shell->registerCommand("svn cat 'foobar.php'|phpcs", '{"totals":{"errors":0,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":0,"messages":[]}}}');
		$shell->registerCommand("cat 'foobar.php'|phpcs", '{"totals":{"errors":0,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":0,"messages":[]}}}');
		$options = [];
		$expected = PhpcsMessages::fromArrays([], 'STDIN');
		$messages = runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullSvnWorkflowForNonSvnFile() {
		$this->expectException(ShellException::class);
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
svn: E155010: The node 'foobar.php' was not found.
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture, 1);
		$fixture = <<<EOF
svn: warning: W155010: The node 'foobar.php' was not found.

svn: E200009: Could not display info for all targets because some targets don't exist
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture, 1);
		$shell->registerCommand("svn cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$shell->registerCommand("cat 'foobar.php'", '{"totals":{"errors":2,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":1,"warnings":0,"messages":[{"line":20,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."},{"line":99,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}');
		$options = [];
		runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
	}

	public function testFullSvnWorkflowForNewFile() {
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
Index: foobar.php
===================================================================

Property changes on: foobar.php
___________________________________________________________________
Added: svn:eol-style
## -0,0 +1 ##
+native
\ No newline at end of property
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
		$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Node Kind: file
Schedule: add
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
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
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 21,
				'message' => 'Found unused symbol Emergent.',
			],
		], 'STDIN');
		$messages = runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}

	public function testFullSvnWorkflowForEmptyNewFile() {
		$svnFile = 'foobar.php';
		$shell = new TestShell([$svnFile]);
		$fixture = <<<EOF
Index: foobar.php
===================================================================

Property changes on: foobar.php
___________________________________________________________________
Added: svn:eol-style
## -0,0 +1 ##
+native
\ No newline at end of property
EOF;
		$shell->registerCommand("svn diff 'foobar.php'", $fixture);
		$fixture = <<<EOF
Path: foobar.php
Name: foobar.php
Working Copy Root Path: /home/public_html
URL: https://svn.localhost/trunk/foobar.php
Relative URL: ^/trunk/foobar.php
Repository Root: https://svn.localhost
Repository UUID: 1111-1111-1111-1111
Node Kind: file
Schedule: add
EOF;
		$shell->registerCommand("svn info 'foobar.php'", $fixture);
		$fixture = 'ERROR: You must supply at least one file or directory to process.

Run "phpcs --help" for usage information
';
		$shell->registerCommand( "cat 'foobar.php'", $fixture);
		$options = [];
		$expected = PhpcsMessages::fromArrays([], 'STDIN');
		$messages = runSvnWorkflow([$svnFile], $options, $shell, '\PhpcsChangedTests\Debug');
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}
}

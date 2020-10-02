<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\PhpcsMessages;
use PhpcsChanged\FullReporter;

final class FullReporterTest extends TestCase {
	public function testSingleWarning() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
		], 'fileA.php');
		$expected = <<<EOF

FILE: fileA.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 15 | WARNING | Found unused symbol Foo.
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, []);
		$this->assertEquals($expected, $result);
	}

	public function testSingleWarningWithShowCodeOption() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
		], 'fileA.php');
		$expected = <<<EOF

FILE: fileA.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 15 | WARNING | Found unused symbol Foo. (ImportDetection.Imports.RequireImports.Import)
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, ['s' => 1]);
		$this->assertEquals($expected, $result);
	}

	public function testSingleWarningWithShowCodeOptionAndNoCode() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
		], 'fileA.php');
		$expected = <<<EOF

FILE: fileA.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 15 | WARNING | Found unused symbol Foo. (Unknown)
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, ['s' => 1]);
		$this->assertEquals($expected, $result);
	}

	public function testMultipleWarningsWithLongLineNumber() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 133825,
				'message' => 'Found unused symbol Foo.',
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Bar.',
			],
		], 'fileA.php');
		$expected = <<<EOF

FILE: fileA.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 2 WARNINGS AFFECTING 2 LINES
-----------------------------------------------------------------------------------------------
 133825 | WARNING | Found unused symbol Foo.
     15 | WARNING | Found unused symbol Bar.
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, []);
		$this->assertEquals($expected, $result);
	}

	public function testMultipleWarningsErrorsAndFiles() {
		$messagesA = PhpcsMessages::fromArrays([
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => true,
				'column' => 2,
				'source' => 'ImportDetection.Imports.RequireImports.Something',
				'line' => 12,
				'message' => 'Found unused symbol Faa.',
			],
			[
				'type' => 'ERROR',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 8,
				'source' => 'ImportDetection.Imports.RequireImports.Boom',
				'line' => 18,
				'message' => 'Found unused symbol Bar.',
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 22,
				'message' => 'Found unused symbol Foo.',
			],
		], 'fileA.php');
		$messagesB = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Zoop',
				'line' => 30,
				'message' => 'Found unused symbol Hi.',
			],
		], 'fileB.php');
		$messages = PhpcsMessages::merge([$messagesA, $messagesB]);
		$expected = <<<EOF

FILE: fileA.php
-----------------------------------------------------------------------------------------------
FOUND 2 ERRORS AND 2 WARNINGS AFFECTING 4 LINES
-----------------------------------------------------------------------------------------------
 12 | ERROR | Found unused symbol Faa. (ImportDetection.Imports.RequireImports.Something)
 15 | ERROR | Found unused symbol Foo. (ImportDetection.Imports.RequireImports.Import)
 18 | WARNING | Found unused symbol Bar. (ImportDetection.Imports.RequireImports.Boom)
 22 | WARNING | Found unused symbol Foo. (ImportDetection.Imports.RequireImports.Import)
-----------------------------------------------------------------------------------------------


FILE: fileB.php
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 30 | WARNING | Found unused symbol Hi. (ImportDetection.Imports.RequireImports.Zoop)
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, ['s' => 1]);
		$this->assertEquals($expected, $result);
	}

	public function testNoWarnings() {
		$messages = PhpcsMessages::fromArrays([]);
		$expected = <<<EOF

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, []);
		$this->assertEquals($expected, $result);
	}

	public function testSingleWarningWithNoFilename() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
		]);
		$expected = <<<EOF

FILE: STDIN
-----------------------------------------------------------------------------------------------
FOUND 0 ERRORS AND 1 WARNING AFFECTING 1 LINE
-----------------------------------------------------------------------------------------------
 15 | WARNING | Found unused symbol Foo.
-----------------------------------------------------------------------------------------------

EOF;
		$reporter = new FullReporter();
		$result = $reporter->getFormattedMessages($messages, []);
		$this->assertEquals($expected, $result);
	}

	public function testGetExitCodeWithMessages() {
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 15,
				'message' => 'Found unused symbol Foo.',
			],
		], 'fileA.php');
		$reporter = new FullReporter();
		$this->assertEquals(1, $reporter->getExitCode($messages));
	}

	public function testGetExitCodeWithNoMessages() {
		$messages = PhpcsMessages::fromArrays([], 'fileA.php');
		$reporter = new FullReporter();
		$this->assertEquals(0, $reporter->getExitCode($messages));
	}
}

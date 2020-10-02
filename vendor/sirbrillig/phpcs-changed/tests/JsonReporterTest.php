<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\PhpcsMessages;
use PhpcsChanged\JsonReporter;

final class JsonReporterTest extends TestCase {
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
{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"fileA.php":{"errors":0,"warnings":1,"messages":[{"line":15,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."}]}}}
EOF;
		$reporter = new JsonReporter();
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
{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"fileA.php":{"errors":0,"warnings":1,"messages":[{"line":15,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."}]}}}
EOF;
		$reporter = new JsonReporter();
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
{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"fileA.php":{"errors":0,"warnings":1,"messages":[{"line":15,"type":"WARNING","severity":5,"fixable":false,"column":5,"message":"Found unused symbol Foo."}]}}}
EOF;
		$reporter = new JsonReporter();
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
{"totals":{"errors":0,"warnings":2,"fixable":0},"files":{"fileA.php":{"errors":0,"warnings":2,"messages":[{"line":133825,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."},{"line":15,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Bar."}]}}}
EOF;
		$reporter = new JsonReporter();
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
{"totals":{"errors":2,"warnings":3,"fixable":0},"files":{"fileA.php":{"errors":2,"warnings":2,"messages":[{"line":12,"type":"ERROR","severity":5,"fixable":true,"column":2,"source":"ImportDetection.Imports.RequireImports.Something","message":"Found unused symbol Faa."},{"line":15,"type":"ERROR","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."},{"line":18,"type":"WARNING","severity":5,"fixable":false,"column":8,"source":"ImportDetection.Imports.RequireImports.Boom","message":"Found unused symbol Bar."},{"line":22,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."}]},"fileB.php":{"errors":0,"warnings":1,"messages":[{"line":30,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Zoop","message":"Found unused symbol Hi."}]}}}
EOF;
		$reporter = new JsonReporter();
		$result = $reporter->getFormattedMessages($messages, ['s' => 1]);
		$this->assertEquals($expected, $result);
	}

	public function testNoWarnings() {
		$messages = PhpcsMessages::fromArrays([]);
		$expected = <<<EOF
{"totals":{"errors":0,"warnings":0,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":0,"messages":[]}}}
EOF;
		$reporter = new JsonReporter();
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
{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":1,"messages":[{"line":15,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Foo."}]}}}
EOF;
		$reporter = new JsonReporter();
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
		$reporter = new JsonReporter();
		$this->assertEquals(1, $reporter->getExitCode($messages));
	}

	public function testGetExitCodeWithNoMessages() {
		$messages = PhpcsMessages::fromArrays([], 'fileA.php');
		$reporter = new JsonReporter();
		$this->assertEquals(0, $reporter->getExitCode($messages));
	}
}


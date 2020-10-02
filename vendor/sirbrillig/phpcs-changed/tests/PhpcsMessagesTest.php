<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\PhpcsMessages;

final class PhpcsMessagesTest extends TestCase {
	public function testFromPhpcsJson() {
		$expected = [ 20 ];
		$json = '{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":1,"messages":[{"message":"Found unused symbol Emergent.","source":"ImportDetection.Imports.RequireImports.Import","severity":5,"type":"WARNING","line":20,"column":5,"fixable":false}]}}}';
		$messages = PhpcsMessages::fromPhpcsJson($json);
		$this->assertEquals($expected, $messages->getLineNumbers());
	}

	public function testFromPhpcsJsonWithEmptyJson() {
		$expected = [];
		$json = '';
		$messages = PhpcsMessages::fromPhpcsJson($json);
		$this->assertEquals($expected, $messages->getLineNumbers());
	}

	public function testGetPhpcsJson() {
		$expected = '{"totals":{"errors":0,"warnings":1,"fixable":0},"files":{"STDIN":{"errors":0,"warnings":1,"messages":[{"line":20,"type":"WARNING","severity":5,"fixable":false,"column":5,"source":"ImportDetection.Imports.RequireImports.Import","message":"Found unused symbol Emergent."}]}}}';
		$messages = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 20,
				'message' => 'Found unused symbol Emergent.',
			],
		]);
		$this->assertEquals($expected, $messages->toPhpcsJson());
	}

	public function testMerge() {
		$expected = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
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
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 18,
				'message' => 'Found unused symbol Baz.',
			],
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 20,
				'message' => 'Found unused symbol Bar.',
			],
		]);
		$messagesA = PhpcsMessages::fromArrays([
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
		$messagesB = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 18,
				'message' => 'Found unused symbol Baz.',
			],
		]);
		$messagesC = PhpcsMessages::fromArrays([
			[
				'type' => 'WARNING',
				'severity' => 5,
				'fixable' => false,
				'column' => 5,
				'source' => 'ImportDetection.Imports.RequireImports.Import',
				'line' => 20,
				'message' => 'Found unused symbol Bar.',
			],
		]);
		$messages = PhpcsMessages::merge([$messagesA, $messagesB, $messagesC]);
		$this->assertEquals($expected->getMessages(), $messages->getMessages());
	}
}

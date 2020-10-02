<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';

use PHPUnit\Framework\TestCase;
use function PhpcsChanged\Cli\fileHasValidExtension;

class MockSplFileInfo extends SplFileInfo {
	private $isFile = false;
	public function setIsFile(bool $isFile): void {
		$this->isFile = $isFile;
	}

	public function isFile(): bool {
		return $this->isFile;
	}
}

final class CliTest extends TestCase {
	public function filesProvider() {
		return [
			'PHP File' => ['example.php', true, true],
			'Dir' => ['example', false, false],
			'JS File' => ['example.js', true, true],
			'INC file' => ['example.inc', true, true],
			'Dot File' => ['.example', true, false],
			'Dot INC dot PHP' => ['example.inc.php', true, true],
		];
	}

	/**
	 * @dataProvider filesProvider
	 */
	public function testFileHasValidExtension( $fileName, $isFile, $hasValidExtension ) {

		$file = new MockSplFileInfo($fileName);
		$file->setIsFile($isFile);
		$this->assertEquals(fileHasValidExtension($file), $hasValidExtension);
	}
}

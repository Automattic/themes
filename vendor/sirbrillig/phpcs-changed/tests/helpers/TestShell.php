<?php
declare(strict_types=1);

namespace PhpcsChangedTests;

use PhpcsChanged\ShellOperator;

class TestShell implements ShellOperator {

	private $readableFileNames = [];

	private $commands = [];

	public function __construct(array $readableFileNames) {
		foreach ($readableFileNames as $fileName) {
			$this->registerReadableFileName($fileName);
		}
	}

	public function registerReadableFileName(string $fileName, bool $override = false): bool {
		if (!isset($this->readableFileNames[$fileName]) || $override ) {
			$this->readableFileNames[$fileName] = true;
			return true;
		}
		throw new \Exception("Already registered file name: {$fileName}");
	}

	public function registerCommand(string $command, string $output, int $return_val = 0, bool $override = false): bool {
		if (!isset($this->commands[$command]) || $override) {
			$this->commands[$command] = [
				'output' => $output,
				'return_val' => $return_val,
			];
			return true;
		}
		throw new \Exception("Already registered command: {$command}");
	}

	public function isReadable(string $fileName): bool {
		return isset($this->readableFileNames[$fileName]);
	}

	public function exitWithCode(int $code): void {} // phpcs:ignore VariableAnalysis

	public function printError(string $message): void {} // phpcs:ignore VariableAnalysis

	public function validateExecutableExists(string $name, string $command): void {} // phpcs:ignore VariableAnalysis

	public function executeCommand(string $command, array &$output = null, int &$return_val = null): string {
		foreach ($this->commands as $registeredCommand => $return) {
			if ( false !== strpos($command, $registeredCommand) ) {
				$return_val = $return['return_val'];
				$output = $return['output'];
				return $return['output'];
			}
		}

		throw new \Exception("Unknown command: {$command}");
	}
}

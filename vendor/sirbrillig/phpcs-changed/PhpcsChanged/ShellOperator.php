<?php
declare(strict_types=1);

namespace PhpcsChanged;

/**
 * Interface to perform file and shell operations
 */
interface ShellOperator {
	public function validateExecutableExists(string $name, string $command): void;

	public function executeCommand(string $command, array &$output = null, int &$return_val = null): string;

	public function isReadable(string $fileName): bool;

	public function exitWithCode(int $code): void;

	public function printError(string $message): void;
}

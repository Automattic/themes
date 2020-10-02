<?php
declare(strict_types=1);

namespace PhpcsChanged;

use PhpcsChanged\DiffLineMap;
use PhpcsChanged\PhpcsMessages;
use PhpcsChanged\ShellException;

function getVersion(): string {
	return '2.5.1';
}

function getNewPhpcsMessages(string $unifiedDiff, PhpcsMessages $oldPhpcsMessages, PhpcsMessages $newPhpcsMessages): PhpcsMessages {
	$map = DiffLineMap::fromUnifiedDiff($unifiedDiff);
	$fileName = DiffLineMap::getFileNameFromDiff($unifiedDiff);
	return PhpcsMessages::fromPhpcsMessages(array_values(array_filter($newPhpcsMessages->getMessages(), function($newMessage) use ($oldPhpcsMessages, $map) {
		$lineNumber = $newMessage->getLineNumber();
		if (! $lineNumber) {
			return true;
		}
		$oldLineNumber = $map->getOldLineNumberForLine($lineNumber);
		$oldMessagesContainingOldLineNumber = array_values(array_filter($oldPhpcsMessages->getMessages(), function($oldMessage) use ($oldLineNumber) {
			return $oldMessage->getLineNumber() === $oldLineNumber;
		}));
		return ! count($oldMessagesContainingOldLineNumber) > 0;
	})), $fileName);
}

function getNewPhpcsMessagesFromFiles(string $diffFile, string $phpcsOldFile, string $phpcsNewFile): PhpcsMessages {
	$unifiedDiff = file_get_contents($diffFile);
	$oldFilePhpcsOutput = file_get_contents($phpcsOldFile);
	$newFilePhpcsOutput = file_get_contents($phpcsNewFile);
	if (! $unifiedDiff || ! $oldFilePhpcsOutput || ! $newFilePhpcsOutput) {
		throw new ShellException('Cannot read input files.');
	}
	return getNewPhpcsMessages(
		$unifiedDiff,
		PhpcsMessages::fromPhpcsJson($oldFilePhpcsOutput),
		PhpcsMessages::fromPhpcsJson($newFilePhpcsOutput)
	);
}

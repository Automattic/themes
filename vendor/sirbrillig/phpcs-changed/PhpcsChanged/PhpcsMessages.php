<?php
declare(strict_types=1);

namespace PhpcsChanged;

use PhpcsChanged\PhpcsMessage;
use PhpcsChanged\JsonReporter;

class PhpcsMessages {
	private $messages = [];

	public function __construct(array $messages) {
		foreach($messages as $message) {
			if (! $message instanceof PhpcsMessage) {
				throw new \Exception('Each message in a PhpcsMessages object must be a PhpcsMessage; found ' . var_export($message, true));
			}
		}
		$this->messages = $messages;
	}

	public static function merge(array $messages): self {
		return self::fromPhpcsMessages(array_merge(...array_map(function(PhpcsMessages $message) {
			return $message->getMessages();
		}, $messages)));
	}

	public static function fromPhpcsMessages(array $messages, string $fileName = null): self {
		return new self(array_map(function(PhpcsMessage $message) use ($fileName) {
			if ($fileName) {
				$message->setFile($fileName);
			}
			return $message;
		}, $messages));
	}

	public static function fromArrays(array $messages, string $fileName = null): self {
		return new self(array_map(function(array $messageArray) use ($fileName) {
			return new PhpcsMessage($messageArray['line'] ?? null, $fileName, $messageArray['type'] ?? 'ERROR', $messageArray);
		}, $messages));
	}

	public static function fromPhpcsJson(string $messages, string $forcedFileName = null): self {
		if (empty($messages)) {
			return self::fromArrays([], $forcedFileName ?? 'STDIN');
		}
		$parsed = json_decode($messages, true);
		if (! $parsed) {
			throw new \Exception('Failed to decode phpcs JSON: ' . var_export($messages, true));
		}
		if (! isset($parsed['files']) || ! is_array($parsed['files'])) {
			throw new \Exception('Failed to find files in phpcs JSON: ' . var_export($messages, true));
		}
		$fileNames = array_map(function($fileName) {
			return $fileName;
		}, array_keys($parsed['files']));
		if (count($fileNames) < 1) {
			throw new \Exception('Failed to find file names in phpcs JSON: ' . var_export($messages, true));
		}
		$fileName = $fileNames[0];
		if (! isset($parsed['files'][$fileName]['messages'])) {
			throw new \Exception('Failed to find messages in phpcs JSON: ' . var_export($messages, true));
		}
		if (! is_array($parsed['files'][$fileName]['messages'])) {
			throw new \Exception('Failed to find messages array in phpcs JSON: ' . var_export($messages, true));
		}
		return self::fromArrays($parsed['files'][$fileName]['messages'], $forcedFileName ?? $fileName);
	}

	public function getMessages(): array {
		return $this->messages;
	}

	public function getLineNumbers(): array {
		return array_map(function($message) {
			return $message->getLineNumber();
		}, $this->messages);
	}

	public function toPhpcsJson(): string {
		$reporter = new JsonReporter();
		return $reporter->getFormattedMessages($this, []);
	}
}

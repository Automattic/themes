<?php
declare(strict_types=1);

namespace PhpcsChanged;

class PhpcsMessage {
	private $line;
	private $file;
	private $type;
	private $otherProperties;

	public function __construct(int $line, string $file = null, string $type, array $otherProperties) {
		$this->line = $line;
		$this->file = $file;
		$this->type = $type;
		$this->otherProperties = $otherProperties;
	}

	public function getLineNumber(): int {
		return $this->line;
	}

	public function getFile(): ?string {
		return $this->file;
	}

	public function setFile(string $file): void {
		$this->file = $file;
	}

	public function getType(): string {
		return $this->type;
	}

	public function getMessage(): string {
		return $this->otherProperties['message'] ?? '';
	}

	public function getSource(): string {
		return $this->otherProperties['source'] ?? '';
	}

	public function toPhpcsArray(): array {
		return array_merge([
			'line' => $this->line,
		], $this->otherProperties);
	}
}

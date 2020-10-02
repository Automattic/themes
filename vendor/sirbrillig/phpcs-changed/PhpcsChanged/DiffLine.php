<?php
declare(strict_types=1);

namespace PhpcsChanged;

use PhpcsChanged\DiffLineType;

class DiffLine {
	private $oldLine = null;
	private $newLine = null;
	private $type = null;
	private $line = null;

	public function __construct(int $oldLine, int $newLine, DiffLineType $type, string $line) {
		$this->type = $type;
		$this->line = $line;
		if (! $type->isAdd()) {
			$this->oldLine = $oldLine;
		}
		if (! $type->isRemove()) {
			$this->newLine = $newLine;
		}
	}

	public function getOldLineNumber(): ?int {
		return $this->oldLine;
	}

	public function getNewLineNumber(): ?int {
		return $this->newLine;
	}

	public function getType(): DiffLineType {
		return $this->type;
	}

	public function getLine(): string {
		return $this->line;
	}

	public function __toString(): string {
		$oldLine = $this->oldLine ?? 'none';
		$newLine = $this->newLine ?? 'none';
		$type = (string)$this->type;
		return "({$type}) {$oldLine} => {$newLine}: {$this->line}";
	}
}

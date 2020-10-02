<?php
declare(strict_types=1);

namespace PhpcsChanged;

class DiffLineType {
	private $type;

	private function __construct(string $type) {
		$this->type = $type;
	}

	public static function makeAdd(): self {
		return new self('add');
	}

	public static function makeRemove(): self {
		return new self('remove');
	}

	public static function makeContext(): self {
		return new self('context');
	}

	public function isAdd(): bool {
		return $this->type === 'add';
	}

	public function isRemove(): bool {
		return $this->type === 'remove';
	}

	public function isContext(): bool {
		return $this->type === 'context';
	}

	public function __toString(): string {
		return $this->type;
	}
}

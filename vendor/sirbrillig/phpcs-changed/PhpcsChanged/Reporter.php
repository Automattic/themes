<?php
declare(strict_types=1);

namespace PhpcsChanged;

use PhpcsChanged\PhpcsMessages;

interface Reporter {
	public function getFormattedMessages(PhpcsMessages $messages, array $options): string;
	public function getExitCode(PhpcsMessages $messages): int;
}

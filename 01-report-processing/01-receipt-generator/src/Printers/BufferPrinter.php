<?php
declare(strict_types=1);

namespace App\Printers;

use App\Contracts\ReceiptPrinter;

class BufferPrinter implements ReceiptPrinter
{
	public function __construct()
	{
		echo "Buffering..." . PHP_EOL;
		sleep(2);
	}
	private string $buffer = '';

	public function print(string $content): void
	{
		$this->buffer = $content;
		echo $this->buffer . PHP_EOL;
	}
}

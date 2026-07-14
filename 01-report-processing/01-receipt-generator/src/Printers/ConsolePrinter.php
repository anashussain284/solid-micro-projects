<?php
declare(strict_types=1);

namespace App\Printers;

use App\Contracts\ReceiptPrinter;

class ConsolePrinter implements ReceiptPrinter
{
	public function print(string $content): void
	{
		echo $content . PHP_EOL;
	}
}
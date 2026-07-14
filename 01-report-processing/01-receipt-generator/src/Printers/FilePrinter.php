<?php
declare(strict_types=1);

namespace App\Printers;

use App\Contracts\ReceiptPrinter;

class FilePrinter implements ReceiptPrinter
{
	public function print(string $content): void
	{
		file_put_contents('receipt.txt', $content);
	}
}
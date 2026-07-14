<?php
declare(strict_types=1);

namespace App\Contracts;

interface ReceiptPrinter
{
	public function print(string $content): void;
}
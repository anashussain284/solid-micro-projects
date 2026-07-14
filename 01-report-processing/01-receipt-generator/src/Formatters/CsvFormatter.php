<?php
declare(strict_types=1);

namespace App\Formatters;

use App\Contracts\ReceiptFormatter;
use App\Models\Receipt;

class CsvFormatter implements ReceiptFormatter
{
	public function format(Receipt $receipt, float $discoutPrice): string
	{
		return "{$receipt->getItem()},{$receipt->getPrice()},{$discoutPrice}";
	}
}
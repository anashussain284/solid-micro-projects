<?php
declare(strict_types=1);

namespace App\Formatters;

use App\Contracts\ReceiptFormatter;
use App\Models\Receipt;

class PlainTextFormatter implements ReceiptFormatter
{
	public function format(Receipt $receipt, float $discoutPrice): string
	{
		return "item-name: {$receipt->getItem()}, item-original-price: {$receipt->getPrice()}, item-discount-price: {$discoutPrice}";
	}
}
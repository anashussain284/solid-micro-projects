<?php
declare(strict_types=1);

namespace App\Formatters;

use App\Contracts\ReceiptFormatter;
use App\Models\Receipt;

class JsonFormatter implements ReceiptFormatter
{
	public function format(Receipt $receipt, float $discoutPrice): string
	{
		return json_encode([
			'item-name' => $receipt->getItem(),
			'item-original-price' => $receipt->getPrice(),
			'item-discount-price' => $discoutPrice
		], JSON_PRETTY_PRINT);
	}
}
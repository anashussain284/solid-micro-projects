<?php
declare(strict_types=1);

namespace App\Formatters;

use App\Contracts\ReceiptFormatter;
use App\Models\Receipt;

class HtmlFormatter implements ReceiptFormatter
{
	public function format(Receipt $receipt, float $discoutPrice): string
	{
		return "<html><p>item-name = {$receipt->getItem()}</p><p>item-original-price = {$receipt->getPrice()}</p><p>item-discount-price = {$discoutPrice}</p></html>";
	}
}
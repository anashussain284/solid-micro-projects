<?php
declare(strict_types=1);

namespace App\Calculators;

use App\Contracts\SubtotalCalculator;
use App\Models\Invoice;

class QuantitySubtotalCalculator implements SubtotalCalculator
{
	public function calculate(Invoice $invoice): float
	{
		$subTotal = 0;

		foreach ($invoice->items as $item) {
			$subTotal += ($item->quantity * $item->price);
		}

		return $subTotal;
	}
}
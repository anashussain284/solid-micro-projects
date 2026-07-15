<?php
declare(strict_types=1);

namespace App\Calculators;

use App\Contracts\SubtotalCalculator;
use App\Models\Invoice;

final class StandardSubtotalCalculator implements SubtotalCalculator
{
	public function calculate(Invoice $invoice): int
	{
		$subTotal = 0;

		foreach ($invoice->items as $item) {
			$subTotal += $item->total();
		}

		return $subTotal;
	}
}
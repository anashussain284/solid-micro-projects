<?php
declare(strict_types=1);

namespace App\Taxes;

use App\Contracts\TaxPolicy;

class PercentageTaxPolicy implements TaxPolicy
{
	public function __construct(
		private float $percentage
	) { }

	public function apply(float $subtotal): float
	{
		return $subtotal + ($subtotal * $this->percentage / 100);
	}
}
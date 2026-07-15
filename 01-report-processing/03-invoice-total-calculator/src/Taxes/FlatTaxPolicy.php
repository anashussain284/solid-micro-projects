<?php
declare(strict_types=1);

namespace App\Taxes;

use App\Contracts\TaxPolicy;

class FlatTaxPolicy implements TaxPolicy
{
	public function __construct(
		private float $amount
	) { }

	public function apply(float $subtotal): float
	{
		return $subtotal + $this->amount;
	}
}
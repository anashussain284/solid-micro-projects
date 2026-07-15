<?php
declare(strict_types=1);

namespace App\Taxes;

use App\Contracts\TaxPolicy;

class NoTaxPolicy implements TaxPolicy
{
	public function apply(float $subtotal): float
	{
		return $subtotal;
	}
}
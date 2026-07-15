<?php
declare(strict_types=1);

namespace App\Taxes;

use App\Contracts\TaxPolicy;

final class NoTaxPolicy implements TaxPolicy
{
	public function apply(float $subtotal): float
	{
		return $subtotal;
	}
}
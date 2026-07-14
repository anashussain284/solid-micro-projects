<?php
declare(strict_types=1);

namespace App\Discounts;

use App\Contracts\DiscountPolicy;

class PercentageDiscount implements DiscountPolicy 
{
	public function __construct(
		private float $percentage
	) { }

	public function apply(float $price): float
	{
		return $price - ($price * $this->percentage / 100);
	}
}
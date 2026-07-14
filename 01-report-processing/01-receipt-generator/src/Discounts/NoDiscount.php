<?php
declare(strict_types=1);

namespace App\Discounts;

use App\Contracts\DiscountPolicy;

class NoDiscount implements DiscountPolicy
{
	public function apply(float $price): float
	{
		return $price;
	}
}
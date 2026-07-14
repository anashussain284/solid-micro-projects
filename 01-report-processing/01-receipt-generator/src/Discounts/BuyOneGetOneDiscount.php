<?php
declare(strict_types=1);

namespace App\Discounts;

use App\Contracts\DiscountPolicy;

class BuyOneGetOneDiscount implements DiscountPolicy
{
	public function apply(float $price): float
	{
		return ($price > 1000) ? $price/2 : $price;
	}
}
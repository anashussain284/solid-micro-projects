<?php
declare(strict_types=1);

namespace App\Discounts;

use App\Contracts\DiscountPolicy;

final readonly class FlatDiscount implements DiscountPolicy
{
	public function __construct(
		private float $amount
	) { }

	public function apply(float $price): float
	{
		return max(0, $price - $this->amount);
	}
}
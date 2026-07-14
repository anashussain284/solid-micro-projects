<?php
declare(strict_types=1);

namespace App\Contracts;

interface DiscountPolicy
{
	public function apply(float $price): float;
}
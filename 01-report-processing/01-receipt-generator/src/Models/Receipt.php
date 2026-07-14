<?php
declare(strict_types=1);

namespace App\Models;

final readonly class Receipt
{
	public function __construct(
		private string $item,
		private float $price
	) { }

	public function getItem(): string { return $this->item; }
	public function getPrice(): float { return $this->price; }
}
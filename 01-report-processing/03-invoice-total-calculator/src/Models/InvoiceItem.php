<?php
declare(strict_types=1);

namespace App\Models;

final readonly class InvoiceItem
{
	public function __construct(
		public string $name,
		public int $quantity,
		public float $price
	) {}

	public function total(): float
	{
		return $this->price * $this->quantity;
	}
}
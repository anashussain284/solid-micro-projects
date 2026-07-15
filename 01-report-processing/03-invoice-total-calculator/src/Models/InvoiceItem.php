<?php
declare(strict_types=1);

namespace App\Models;

final readonly class InvoiceItem
{
	public function __construct(
		public string $name,
		public int $quantity,
		public int $priceInCents
	) {}

	public function total(): int
	{
		return $this->priceInCents * $this->quantity;
	}
}
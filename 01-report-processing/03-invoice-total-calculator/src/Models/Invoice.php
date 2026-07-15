<?php
declare(strict_types=1);

namespace App\Models;

final readonly class Invoice
{
	/**
	 * @param InvoiceItem[] $items
	 */
	public function __construct(
		public array $items
	) { }
}
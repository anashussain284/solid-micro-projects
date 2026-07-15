<?php
declare(strict_types=1);

namespace App\Contracts;

interface InvoiceRenderer
{
	public function render(float $subtotal, float $total): string;
}
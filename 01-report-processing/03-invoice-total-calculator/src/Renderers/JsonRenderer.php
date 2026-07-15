<?php
declare(strict_types=1);

namespace App\Renderers;

use App\Contracts\InvoiceRenderer;

final class JsonRenderer implements InvoiceRenderer
{
	public function render(float $subtotal, float $total): string
	{
		return json_encode([
			'sub-total' => $subtotal,
			'grand-total' => $total
		], JSON_PRETTY_PRINT);
	}
}
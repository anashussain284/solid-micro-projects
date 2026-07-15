<?php
declare(strict_types=1);

namespace App\Renderers;

use App\Contracts\InvoiceRenderer;

final class PlainTextRenderer implements InvoiceRenderer
{
	public function render(float $subtotal, float $total): string
	{
		return "sub-total = {$subtotal}, grand-total = {$total}";
	}
}
<?php
declare(strict_types=1);

namespace App\Renderers;

use App\Contracts\InvoiceRenderer;

final class CsvRenderer implements InvoiceRenderer
{
	public function render(float $subtotal, float $total): string
	{
		$csv = "sub-total,grand-total" . PHP_EOL;
		$csv .= "{$subtotal},{$total}";

		return $csv;
	}
}
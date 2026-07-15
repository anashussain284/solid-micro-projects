<?php
declare(strict_types=1);

namespace App\Services;

use App\Contracts\InvoiceRenderer;
use App\Contracts\SubtotalCalculator;
use App\Contracts\TaxPolicy;
use App\Models\Invoice;

final readonly class InvoiceTotalCalculator
{
	public function __construct(
		private InvoiceRenderer $renderer,
		private SubtotalCalculator $calculator,
		private TaxPolicy $taxPolicy
	) {}

	public function calculate(Invoice $invoice): string
	{
		$subTotal = $this->calculator->calculate($invoice);
		$total = $this->taxPolicy->apply($subTotal);
		return $this->renderer->render($subTotal, $total);
	}
}
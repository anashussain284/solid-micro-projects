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
		private TaxPolicy $tax
	) {}

	public function calculate(Invoice $invoice): void
	{
		$subTotal = $this->calculator->calculate($invoice);
		$total = $this->tax->apply($subTotal);
		$ouput = $this->renderer->render($subTotal, $total);

		echo $ouput . PHP_EOL;
	}
}
<?php
declare(strict_types=1);

namespace App\Contracts;

use App\Models\Invoice;

interface SubtotalCalculator
{
	public function calculate(Invoice $invoice): int;
}
<?php
declare(strict_types=1);

namespace App\Contracts;

use App\Models\Receipt;

interface ReceiptFormatter
{
	public function format(Receipt $receipt, float $discoutPrice): string;
}
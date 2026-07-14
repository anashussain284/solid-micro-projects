<?php
declare(strict_types=1);

namespace App\Services;

use App\Contracts\DiscountPolicy;
use App\Contracts\ReceiptFormatter;
use App\Contracts\ReceiptPrinter;

abstract class AbstractReceiptGenerator
{
	public function __construct(
		protected DiscountPolicy $policy,
		protected ReceiptFormatter $formatter,
		protected ReceiptPrinter $printer
	) {}
}
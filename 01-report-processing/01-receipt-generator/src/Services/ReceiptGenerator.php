<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Receipt;

class ReceiptGenerator extends AbstractReceiptGenerator
{
    public function generate(Receipt $receipt): void
    {
        $discountPrice = $this->policy->apply($receipt->getPrice());

        // format
        $output = $this->formatter->format($receipt, $discountPrice);

        // print
        $this->printer->print($output);
    }
}
<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Calculators\StandardSubtotalCalculator;
use App\Calculators\QuantitySubtotalCalculator;
use App\Calculators\RoundedSubtotalCalculator;
use App\Taxes\NoTaxPolicy;
use App\Taxes\PercentageTaxPolicy;
use App\Taxes\FlatTaxPolicy;
use App\Renderers\JsonRenderer;
use App\Renderers\PlainTextRenderer;
use App\Renderers\CsvRenderer;
use App\Services\InvoiceTotalCalculator;

$invoiceItem1 = new InvoiceItem(
	name: 'Book',
	quantity: 5,
	priceInCents: 20
);
$invoiceItem2 = new InvoiceItem(
	name: 'Pen',
	quantity: 1,
	priceInCents: 5
);
$invoiceItem3 = new InvoiceItem(
	name: 'Bag',
	quantity: 1,
	priceInCents: 500
);

$invoiceItemsArray = [$invoiceItem1, $invoiceItem2, $invoiceItem3];

$invoice1 = new Invoice($invoiceItemsArray);

$standardSubtotalCalculator = new StandardSubtotalCalculator();
$quantitySubtotalCalculator = new QuantitySubtotalCalculator();
$roundedSubtotalCalculator = new RoundedSubtotalCalculator();
$noTaxPolicy = new NoTaxPolicy();
$percentageTaxPolicy = new PercentageTaxPolicy(18);
$flatTaxPolicy = new FlatTaxPolicy(10.5);
$jsonRenderer = new JsonRenderer();
$plainTextRenderer = new PlainTextRenderer();
$csvRenderer = new CsvRenderer();

$invoiceTotalCalculator = new InvoiceTotalCalculator(
	renderer: $jsonRenderer,
	calculator: $roundedSubtotalCalculator,
	taxPolicy: $flatTaxPolicy
);

$output = $invoiceTotalCalculator->calculate($invoice1);

echo $output . PHP_EOL;
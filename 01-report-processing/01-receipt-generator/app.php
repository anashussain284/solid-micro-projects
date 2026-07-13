<?php declare(strict_types=1); 

require_once __DIR__ . '/vendor/autoload.php';

use App\Entities\Receipt;
use App\Formatters\PlainTextReceiptFormatter;
use App\Formatters\JsonTextReceiptFormatter;
use App\Services\ReceiptGenerator;
use App\Output\ConsolePrinter;

$receipt1 = new Receipt(
	customerName: 'Anas',
	amount: 100.5
);

$receipt2 = new Receipt(
	customerName: 'Asna',
	amount: 200.5
);

$formatter1 = new PlainTextReceiptFormatter();
$formatter2 = new JsonTextReceiptFormatter();

$printer1 = new ConsolePrinter();

$receiptGenerator = new ReceiptGenerator(formatter: $formatter2, printer: $printer1);

$receiptGenerator->generate($receipt1);
$receiptGenerator->generate($receipt2);
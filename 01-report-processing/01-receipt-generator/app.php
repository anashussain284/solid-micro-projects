<?php declare(strict_types=1); 

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Receipt;
use App\Services\ReceiptGenerator;

use App\Discounts\NoDiscount;
use App\Discounts\PercentageDiscount;
use App\Discounts\FlatDiscount;
use App\Discounts\BuyOneGetOneDiscount;
use App\Formatters\JsonFormatter;
use App\Formatters\PlainTextFormatter;
use App\Formatters\CsvFormatter;
use App\Formatters\HtmlFormatter;
use App\Printers\ConsolePrinter;
use App\Printers\FilePrinter;
use App\Printers\BufferPrinter;

$receipt1 = new Receipt("Book", 1400);
$noDiscount = new NoDiscount();
$percentageDiscount = new PercentageDiscount(50);
$flatDiscount = new FlatDiscount(5);
$buyOneGetOneDiscount = new BuyOneGetOneDiscount();
$jsonFormatter = new JsonFormatter();
$csvFormatter = new CsvFormatter();
$htmlFormatter = new HtmlFormatter();
$plainTextFormatter = new PlainTextFormatter();
$consolePrinter = new ConsolePrinter();
$filePrinter = new FilePrinter();
$bufferPrinter = new BufferPrinter();

$generator = new ReceiptGenerator(
	policy: $buyOneGetOneDiscount,
	formatter: $htmlFormatter,
	printer: $consolePrinter,
);

$generator->generate($receipt1);


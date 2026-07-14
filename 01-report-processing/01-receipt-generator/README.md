receipt-generator/
│
├── app.php
├── composer.json
│
└── src
    ├── Contracts
    │   ├── ReceiptFormatter.php
    │   ├── ReceiptPrinter.php
    │   └── DiscountPolicy.php
    │
    ├── Models
    │   └── Receipt.php
    │
    ├── Services
    │   ├── AbstractReceiptGenerator.php
    │   └── ReceiptGenerator.php
    │
    ├── Formatters
    │   ├── PlainTextFormatter.php
    │   ├── JsonFormatter.php
    │   └── CsvFormatter.php
    │
    ├── Printers
    │   ├── ConsolePrinter.php
    │   ├── FilePrinter.php
    │   └── BufferPrinter.php
    │
    └── Discounts
        ├── NoDiscount.php
        ├── PercentageDiscount.php
        └── FlatDiscount.php


<?php
declare(strict_types=1);

namespace App\Storages;

use App\Contracts\ExportStorage;

class ConsoleStorage implements ExportStorage
{
	public function store(string $content): void
	{
		echo $content . PHP_EOL;
	}
}
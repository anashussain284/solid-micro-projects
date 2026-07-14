<?php
declare(strict_types=1);

namespace App\Storages;

use App\Contracts\ExportStorage;

class LogStorage implements ExportStorage
{
	public function store(string $content): void
	{
		file_put_contents('user-profile.log', $content . PHP_EOL, FILE_APPEND);
	}
}
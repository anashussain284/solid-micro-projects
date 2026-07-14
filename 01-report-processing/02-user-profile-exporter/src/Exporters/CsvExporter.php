<?php
declare(strict_types=1);

namespace App\Exporters;

use App\Contracts\ProfileExporter;

class CsvExporter implements ProfileExporter
{
	public function export(array $profile): string
	{
		return implode(',', array_keys($profile))
			. PHP_EOL
			. implode(',', array_values($profile));
	}
}
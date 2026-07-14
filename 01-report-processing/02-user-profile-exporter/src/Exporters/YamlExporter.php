<?php
declare(strict_types=1);

namespace App\Exporters;

use App\Contracts\ProfileExporter;

class YamlExporter implements ProfileExporter
{
	public function export(array $profile): string
	{
		$yml = "# User profile export" . PHP_EOL;

		foreach ($profile as $key => $value) {
			$yml .= "{$key}: {$value}" . PHP_EOL;
		}

		return $yml;
	}
}
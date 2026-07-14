<?php
declare(strict_types=1);

namespace App\Exporters;

use App\Contracts\ProfileExporter;

class JsonExporter implements ProfileExporter
{
	public function export(array $profile): string
	{
		return json_encode($profile, JSON_PRETTY_PRINT);
	}
}
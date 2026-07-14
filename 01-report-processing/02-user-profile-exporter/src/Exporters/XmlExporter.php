<?php
declare(strict_types=1);

namespace App\Exporters;

use App\Contracts\ProfileExporter;

class XmlExporter implements ProfileExporter
{
	public function export(array $profile): string
	{
		$xml = "<user>" . PHP_EOL;

		foreach ($profile as $key => $value) {
			$xml .= "<{$key}>{$value}</{$key}>" . PHP_EOL;
		}

		$xml .= "</user>";

		return $xml;
	}
}
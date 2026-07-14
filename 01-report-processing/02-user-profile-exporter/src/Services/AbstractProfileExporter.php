<?php
declare(strict_types=1);

namespace App\Services;

use App\Contracts\ExportStorage;
use App\Contracts\ProfileExporter;
use App\Contracts\ProfileFilter;

abstract class AbstractProfileExporter
{
	public function __construct(
		protected ExportStorage $storage,
		protected ProfileExporter $exporter,
		protected ProfileFilter $filter
	) { }
}
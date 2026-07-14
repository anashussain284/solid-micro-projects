<?php
declare(strict_types=1);

namespace App\Contracts;

interface ProfileExporter
{
	public function export(array $profile): string;
}
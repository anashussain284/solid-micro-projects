<?php
declare(strict_types=1);

namespace App\Contracts;

interface ExportStorage
{
	public function store(string $content): void;
}
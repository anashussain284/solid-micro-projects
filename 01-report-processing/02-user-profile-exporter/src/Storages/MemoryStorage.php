<?php
declare(strict_types=1);

namespace App\Storages;

use App\Contracts\ExportStorage;

class MemoryStorage implements ExportStorage
{
	private string $content = '';

	public function store(string $content): void
	{
		$this->content = $content;
	}

	public function getContent(): string
	{
		return $this->content;
	}
}
<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\UserProfile;

class UserProfileExporter extends AbstractProfileExporter
{
	public function export(UserProfile $profile): void
	{
		$filteredData = $this->filter->filter($profile);
		$content = $this->exporter->export($filteredData);
		$this->storage->store($content);
	}
}
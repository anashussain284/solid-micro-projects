<?php
declare(strict_types=1);

namespace App\Filters;

use App\Contracts\ProfileFilter;
use App\Models\UserProfile;

class EmailOnlyFilter implements ProfileFilter
{
	public function filter(UserProfile $profile): array
	{
		return [
			'email' => $profile->email
		];
	}
}
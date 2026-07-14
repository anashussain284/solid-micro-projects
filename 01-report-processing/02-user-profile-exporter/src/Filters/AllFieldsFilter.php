<?php
declare(strict_types=1);

namespace App\Filters;

use App\Contracts\ProfileFilter;
use App\Models\UserProfile;

class AllFieldsFilter implements ProfileFilter
{
	public function filter(UserProfile $profile): array
	{
		return [
			'name' => $profile->name,
			'email' => $profile->email,
			'phone' => $profile->phone,
		];
	}
}
<?php
declare(strict_types=1);

namespace App\Contracts;

use App\Models\UserProfile;

interface ProfileFilter
{
	public function filter(UserProfile $profile): array;
}
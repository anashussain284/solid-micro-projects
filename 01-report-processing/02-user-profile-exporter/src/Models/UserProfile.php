<?php
declare(strict_types=1);

namespace App\Models;

final readonly class UserProfile
{
	public function __construct(
		public string $name,
		public string $email,
		public string $phone
	) { }
}
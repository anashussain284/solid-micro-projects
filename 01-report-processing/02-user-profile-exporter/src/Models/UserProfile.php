<?php
declare(strict_types=1);

namespace App\Models;

final readonly class UserProfile
{
	public function __construct(
		private string $name,
		private string $email,
		private string $phone
	) { }

	public function getName(): string { return $this->name; }

	public function getEmail(): string { return $this->email; }

	public function getPhone(): string { return $this->phone; }
}
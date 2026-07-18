<?php

namespace App\Services\Auth;

use App\Interfaces\Auth\AuthRepositoryInterface;
use App\Models\User;

class AuthService
{
    public function __construct(
        protected AuthRepositoryInterface $repository
    ) {}

    public function register(array $data): User
    {
        return $this->repository->create($data);
    }

    public function findUserByEmail(string $email): ?User
    {
        return $this->repository->findByEmail($email);
    }
}

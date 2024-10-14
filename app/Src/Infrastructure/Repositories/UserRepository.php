<?php

namespace App\Infrastructure\Repositories;

use App\Src\Domain\DTO\UserDTO;
use App\Domain\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function create(UserDTO $userDTO)
    {
        return User::create([
            'name' => $userDTO->name,
            'email' => $userDTO->email,
        ]);
    }
}

<?php

namespace App\Domain\Repositories;

use App\Src\Domain\DTO\UserDTO;

interface UserRepositoryInterface
{
    public function create(UserDTO $userDTO);
}

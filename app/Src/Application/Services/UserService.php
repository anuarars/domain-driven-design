<?php

namespace App\Src\Application\Services;

use App\Src\Domain\DTO\UserDTO;
use App\Domain\Repositories\UserRepositoryInterface;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(UserDTO $userDTO)
    {
        return $this->userRepository->create($userDTO);
    }
}

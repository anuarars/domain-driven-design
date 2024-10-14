<?php

namespace App\Http\Controllers;

use App\Src\Application\Services\UserService;
use App\Src\Domain\DTO\UserDTO;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(Request $request)
    {
        $userDTO = UserDTO::fromRequest($request);
        $user = $this->userService->createUser($userDTO);

        return response()->json($user, 201);
    }
}

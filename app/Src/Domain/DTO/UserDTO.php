<?php

namespace App\Src\Domain\DTO;

class UserDTO
{
    public $name;
    public $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public static function fromRequest($request)
    {
        return new self(
            $request->input('name'),
            $request->input('email')
        );
    }
}

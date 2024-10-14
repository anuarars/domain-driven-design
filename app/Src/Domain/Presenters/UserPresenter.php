<?php

namespace App\Src\Domain\Presenters;

use App\Models\User;

class UserPresenter
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at->format('Y-m-d H:i:s'),
        ];
    }
}

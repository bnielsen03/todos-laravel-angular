<?php

namespace App\Auth\Libraries;

use App\Models\User;

class RegisterLibrary
{
    public function register($username, $password)
    {
        if(User::where('email', $username)->first()) {
            throw new \Exception();
        }

        $user = User::create([
            'name' => '',
            'email' => $username,
            'password' => $password
        ]);

        return ['user' => $user];
    }
}

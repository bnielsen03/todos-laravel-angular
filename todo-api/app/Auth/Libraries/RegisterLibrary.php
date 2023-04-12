<?php

namespace App\Auth\Libraries;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function login($username, $password)
    {
        if(!($user = User::where('email', $username)->first())) {
            throw new \Exception('Not found');
        }

        if(Hash::check($password, $user->password)) {
            Auth::loginUsingId($user->id);

            return ['user' => $user];
        }



        throw new \Exception('Incorrect Password');
    }
}

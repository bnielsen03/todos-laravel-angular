<?php

namespace App\Auth\Http\Controllers;

use App\Auth\Libraries\RegisterLibrary;
use Illuminate\Http\Request;

class AuthController
{
    public function register(Request $request, RegisterLibrary $registerLibrary)
    {
        return response()->json(
            $registerLibrary->register($request->input('username'), $request->input('password'))
        );
    }

    public function login(Request $request, RegisterLibrary $registerLibrary)
    {
        return response()->json(
            $registerLibrary->login($request->input('username'), $request->input('password'))
        );
    }
}

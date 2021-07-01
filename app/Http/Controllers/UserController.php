<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $users = [
            (object)[
                "id" => "1",
                "nom" => "Nicolas",
                "age" => 28,
                "email" => "nicolas@example.com",
            ]
        ];
        return view('/pages/user', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        return response(
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->inout('password'),
            ])
        );
    }
}

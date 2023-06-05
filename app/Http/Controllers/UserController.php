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
                'password' => $request->input('password'),
            ])
        );
    }

    public function read(int $id)
    {
        return response(
            User::findOrFail($id)
        );
    }

    public function update(int $id, Request $request)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response(
            $user
        );
    }

    public function delete(int $id)
    {
        $user = User::destroy($id);

        return response('Usuário '.$id.' deletado com sucesso');

    }

}

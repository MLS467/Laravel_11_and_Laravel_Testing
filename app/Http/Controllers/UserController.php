<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function EloquenteQueryBuilder(Request $req)
    {
        // $users = User::get();
        $users = User::all();

        // $users = User::where('id', 1)->get();
        // $users = User::first();
        // $users = array($users);

        // $user = User::insert([
        //     'name' => 'JAGO',
        //     'email' => 'Jaguar@jago.com',
        //     'password' => '456456'
        // ]);

        $user = User::find('14')->update(
            [
                'name' => 'teste',
                'email' => 'teste@teste.com',
                'password' => 'teste'
            ]
        );

        // if ($user) {
        //     return response()->json("Atualizado com sucesso");
        // } else {
        //     return [];
        // }



        return view('user', ['users' => $users]);
    }
}
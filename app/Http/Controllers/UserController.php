<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('user', ['users' => $users]);
    }


    public function create()
    {
        return view('register');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_user = $request->all();
        if ($new_user) {
            $name = $request->has('name') ? $new_user['name'] : 'desconhecido';
            $new_user['password'] = bcrypt($new_user['password']);
            User::create($new_user);
            return response()->json("Usuario {$name} Criado com sucesso", 200);
        }
        return response()->json("Usuario Não foi criado com sucesso", 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('update', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $request->all();

        $result = User::find($id)->update($updated);

        if ($result)
            return response()->json('Atualizado com sucesso', 200);

        return response()->json('erro ao atualizar', 403);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
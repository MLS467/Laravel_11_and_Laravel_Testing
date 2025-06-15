<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.user_form', [
            'title' => 'User Form',
            'description' => 'This is a user form page.'
        ]);
    }

    public function store(Request $request)
    {
        $values = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'php' => 'required',
                'javascript' => 'nullable',
                "genero" => 'nullable'
            ],
            [
                'name.required' => 'O campo nome é obrigatório.',
                'name.string' => 'O nome deve ser uma string válida.',
                'name.max' => 'O nome não pode ter mais que 255 caracteres.',

                'email.required' => 'O campo e-mail é obrigatório.',
                'email.email' => 'O e-mail deve ser um endereço válido.',
                'email.unique' => 'Este e-mail já está cadastrado.',

                'password.required' => 'O campo senha é obrigatório.',
                'password.string' => 'A senha deve ser uma string válida.',
                'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
                'password.confirmed' => 'A confirmação da senha não confere.',

                'php.required' => 'Você precisa informar sua experiência com PHP.',

                // javascript é nullable, mas caso queira validar tipo:
                'javascript.string' => 'O campo JavaScript deve ser uma string.',

                // genero é nullable, mas caso queira validar:
                'genero.string' => 'O campo gênero deve ser uma string.',
            ]
        );

        $values['php'] = $request->has('php') ? true : false;
        $values['javascript'] = $request->has('javascript') ? true : false;
        $values['password'] = Hash::make($values['password']);

        return $values;
    }

    public function show($id)
    {
        return view('user.show', compact('id'));
    }

    public function edit($id)
    {
        return view('user.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update user data
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        // Logic to delete user
        return redirect()->route('user.index');
    }
}
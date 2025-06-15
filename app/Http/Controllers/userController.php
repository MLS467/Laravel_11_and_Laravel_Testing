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
        $values = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'php' => 'required',
            'javascript' => 'nullable',
            "genero" => 'nullable'
        ]);

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
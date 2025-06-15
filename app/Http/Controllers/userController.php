<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
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
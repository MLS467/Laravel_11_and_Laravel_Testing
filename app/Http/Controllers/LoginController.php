<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    public function login(Request $request)
    {
        return view('login');
    }
    public function auth(Request $request)
    {
        $request->session()->put('user', $request->input('email'));

        $result = session('user');
        if ($result)
            return view('profile', compact('result'));

        return response()->json("Não autorizado", 403);
    }

    public function logout()
    {
        session()->pull('user');
        return to_route('profile');
    }


    public function profile()
    {
        if (!session()->has('user'))
            return to_route('login');

        return view('profile');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController
{
    public function __invoke(Request $request)
    {
        $users = DB::select("select * from users");

        if (!$users) return [];

        return view('welcome', ['content_users' => $users]);
    }

    public function getUser()
    {

        $user_placeholder = Http::get("https://jsonplaceholder.typicode.com/users");

        return view('users', ['content_users' => json_decode($user_placeholder)]);
    }
}
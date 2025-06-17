<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function __invoke(Request $request)
    {
        $users = DB::select("select * from users");

        if (!$users) return [];

        return view('welcome', ['content_users' => $users]);
    }
}
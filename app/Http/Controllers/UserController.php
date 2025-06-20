<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{

    public function index()
    {
        return view('user');
    }

    public function getPostUser(Request $request)
    {
        echo $request->method();
        echo "<br/>";
        echo "<br/>";
        echo $request->path();
        echo "<br/>";
        echo "<br/>";
        echo $request->input('name');
        echo "<br/>";
        echo "<br/>";
        echo $request->ip();
        echo "<br/>";
        echo "<br/>";
        // echo "<pre>";
        // print_r($request->input());
        // echo "<pre/>";
        echo "<pre>";
        echo ($request->collect());
        echo "<pre/>";
        echo $request->isMethod('POST') ? "IS POST" : "ERRO";
    }
}
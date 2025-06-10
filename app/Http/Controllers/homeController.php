<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke(Request $request): View
    {
        return View('home');
    }

    public function about($id): View
    {
        return view('about', ['id' => $id]);
    }
}
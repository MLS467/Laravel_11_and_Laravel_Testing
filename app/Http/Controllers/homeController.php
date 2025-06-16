<?php

namespace App\Http\Controllers;


class homeController extends Controller
{
    public function __invoke()
    {
        return to_route('hm');
    }

    public function test($teste)
    {
        return to_route('tt', ['teste' => $teste]);
    }
}
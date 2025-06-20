<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController
{
    public function __invoke(Request $args)
    {
        return "OKAY";
    }
}
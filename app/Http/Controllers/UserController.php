<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController
{
    public function group(Request $request)
    {
        $method = $request->method();

        switch ($method) {
            case 'GET':
                echo "method {$method}";
                break;
            case 'POST':
                echo "method {$method}";
                break;
            case 'PUT':
                echo "method {$method}";
                break;
            case 'DELETE':
                echo "method {$method}";
                break;
        }
    }
}
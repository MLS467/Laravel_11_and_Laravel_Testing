<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CallView;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    use CallView;
    private $view = 'admin.login';
    public function __invoke(Request $request)
    {
        return $this->callView($this->view);
    }
}
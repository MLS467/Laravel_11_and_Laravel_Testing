<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CallView;
use Illuminate\Support\Facades\View;

class aboutController extends Controller
{
    use CallView;
    private $view = 'about';
    public function __invoke($name)
    {
        return $this->callView($this->view, ['name' => $name]);
    }
}
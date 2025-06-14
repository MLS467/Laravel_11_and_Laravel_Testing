<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CallView;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    use CallView;
    private $view = 'home';
    public function __invoke()
    {
        return $this->callView($this->view, [
            'title' => 'Home',
            "valores" => ['João da Silva', "João da Silva 2", "João da Silva 3"]
        ]);
    }
}
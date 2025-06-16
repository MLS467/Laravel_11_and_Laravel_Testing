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

// class homeController extends Controller
// {
//     public function __invoke()
//     {
//         return to_route('hm');
//     }

//     public function test($teste)
//     {
//         return to_route('tt', ['teste' => $teste]);
//     }
// }
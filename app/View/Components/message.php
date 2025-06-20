<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{

    public $class;
    public $msg;

    /**
     * Create a new component instance.
     */
    public function __construct($class, $msg)
    {
        $this->class = $class;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
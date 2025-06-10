<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\View;

trait CallView
{
    public function callView($nameView, $data = [])
    {
        if (View::exists($nameView))
            return response()
                ->view($nameView, $data);

        return response()
            ->view('errors.404', [], 404);
    }
}
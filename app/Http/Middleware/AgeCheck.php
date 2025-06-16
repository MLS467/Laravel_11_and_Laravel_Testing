<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $request é a instância da requisição HTTP
        // $next é a função que chama o próximo middleware ou o controlador 

        if ($request->age < 18) {
            return Response("Não rola papai", 403);
        }

        return $next($request);
    }
}
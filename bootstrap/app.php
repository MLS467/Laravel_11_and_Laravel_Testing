<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(AgeCheck::class); // middleware global aplicadado a a todas as rotas


        // $middleware->appendToGroup('AgeAndCountryCheck', AgeCheck::class); // middleware aplicado a um grupo de rotas


        // middleware aplicado a todas as rotas
        // $middleware->use([
        //     AgeCheck::class
        //]) 

        // grupo de middleware
        $middleware->appendToGroup('AgeAndCountryCheck', [
            CountryCheck::class,
            AgeCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
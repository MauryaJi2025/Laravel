<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ValidUser; // ValidUser middleware ka correct import
use App\Http\Middleware\TestUser; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'isValidUser' => ValidUser::class,
        ]);
    })
    // ->withMiddleware(function (Middleware $middleware) {
    //     $middleware->appendToGroup(
    //         'okUser',[ValidUser::class,TestUser::class
    //     ]);
    // })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

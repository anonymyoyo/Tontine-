<?php

use App\Http\Middleware\Admin;
use App\Http\Middleware\Agence;
use App\Http\Middleware\Association;
use App\Http\Middleware\Collectrice;
use App\Http\Middleware\Commercial;
use App\Http\Middleware\Comptable;
use App\Http\Middleware\User;
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
        //
        $middleware->alias([
            'admin' => Admin::class,
            'association' => Association::class,
            'agence' => Agence::class,
            'commercial' => Commercial::class,
            'user' => User::class,
            'collectrice' => Collectrice::class,
            'comptable' => Comptable::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use App\Http\Middleware\PanelSettingMiddleware;
use App\Http\Middleware\SettingMiddleware;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
            commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'setting'=> SettingMiddleware::class,
            'panelsetting'=>   PanelSettingMiddleware::class,

        ]);
        $middleware->validateCsrfTokens(
        except:[]
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

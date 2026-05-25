<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [__DIR__ . '/../routes/web.php', __DIR__ . '/../routes/admin.php'],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        $middleware->alias([
            'auth' => App\Http\Middleware\GeneralAuthenticate::class,
            'guest' => App\Http\Middleware\AdminRedirectIfAuthenticated::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        $exceptions->render(function (MethodNotAllowedHttpException $e, HttpRequest $request) {

            if ($request->is('reset-password') || $request->is('reset-password/')) {
                return redirect()->route('password.request', [
                    'message' => 'Your reset link is invalid or expired. Please request a new one.'
                ]);
            }
        });

        $exceptions->render(function (NotFoundHttpException $e, HttpRequest $request) {
            if ($request->is('reset-password*')) {
                session()->flash('status', 'Your reset link is invalid or expired. Please request a new one.');
                return redirect()->route('password.request');
            }
        });
        //
    })->create();

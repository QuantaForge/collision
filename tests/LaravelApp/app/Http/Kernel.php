<?php

namespace App\Http;

use QuantaForge\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \QuantaForge\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \QuantaForge\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \QuantaForge\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \QuantaForge\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \QuantaForge\Session\Middleware\StartSession::class,
            \QuantaForge\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \QuantaForge\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \QuantaForge\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \QuantaForge\Routing\Middleware\ThrottleRequests::class.':api',
            \QuantaForge\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's middleware aliases.
     *
     * Aliases may be used to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */
    protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \QuantaForge\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session' => \QuantaForge\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \QuantaForge\Http\Middleware\SetCacheHeaders::class,
        'can' => \QuantaForge\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \QuantaForge\Auth\Middleware\RequirePassword::class,
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \QuantaForge\Routing\Middleware\ThrottleRequests::class,
        'verified' => \QuantaForge\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}

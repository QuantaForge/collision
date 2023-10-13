<?php

namespace App\Http;

use QuantaQuirk\Foundation\Http\Kernel as HttpKernel;

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
        \QuantaQuirk\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \QuantaQuirk\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \QuantaQuirk\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \QuantaQuirk\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \QuantaQuirk\Session\Middleware\StartSession::class,
            \QuantaQuirk\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \QuantaQuirk\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \QuantaQuirk\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \QuantaQuirk\Routing\Middleware\ThrottleRequests::class.':api',
            \QuantaQuirk\Routing\Middleware\SubstituteBindings::class,
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
        'auth.basic' => \QuantaQuirk\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session' => \QuantaQuirk\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \QuantaQuirk\Http\Middleware\SetCacheHeaders::class,
        'can' => \QuantaQuirk\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \QuantaQuirk\Auth\Middleware\RequirePassword::class,
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \QuantaQuirk\Routing\Middleware\ThrottleRequests::class,
        'verified' => \QuantaQuirk\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}

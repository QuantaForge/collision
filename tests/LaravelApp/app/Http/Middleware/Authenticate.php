<?php

namespace App\Http\Middleware;

use QuantaForge\Auth\Middleware\Authenticate as Middleware;
use QuantaForge\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}

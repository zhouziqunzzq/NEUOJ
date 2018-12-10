<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "/api/*",
        /* This will exceed CSRF token max_timeout so do not check CSRF token for it */
        "/dashboard/problem/*",
        "/ajax/memberlist",
    ];
}

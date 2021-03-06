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
        'http://localhost:8000/currencies',
        'http://localhost:8000/currencies/*',

        'http://localhost:8000/categories',
        'http://localhost:8000/categories/*',

        'http://localhost:8000/transaction',
        'http://localhost:8000/transaction/*',

        'http://localhost:8000/saving_goal',
        'http://localhost:8000/saving_goal/*',

        'http://localhost:8000/*',
        
    ];
}

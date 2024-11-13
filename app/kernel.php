<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Middleware rute yang dapat diterapkan secara individual.
     */
    protected $routeMiddleware = [
        // Middleware lain
        'role' => \App\Http\Middleware\CheckRole::class,
    ];
}

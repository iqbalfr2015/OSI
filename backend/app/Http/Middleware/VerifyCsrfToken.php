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
        'api/admin/login',  // Tambahkan rute login API di sini
        'api/admin/logout',  // Tambahkan rute logout di sini
        'api/*'
    ];
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (Auth::check() && !$request->is('login')) {
            return redirect('/dashboard'); // Ubah jika ingin redirect ke halaman lain
        }

        return $next($request);
    }
}

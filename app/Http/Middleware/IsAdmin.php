<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //ngecek apakah dia login apa engga , dan ngecek apakah dia admin atau tidak jika iya masuk ke return
        if (Auth::user() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        }
        return redirect('/');
    }
}
<?php

namespace App\Http\Middleware;

use Closure;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$posisi )
    {
        if (in_array($request->user()->posisi, $posisi)){
            return $next($request);
        }
        return redirect('/login');
    }
}

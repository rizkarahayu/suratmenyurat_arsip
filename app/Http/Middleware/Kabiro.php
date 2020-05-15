<?php

namespace App\Http\Middleware;

use Closure;

class Kabiro
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
        if(auth()->user()->is_admin == 'kabiro'){
            return $next($request);
        }
        return redirect('kabiro')->with('error',"You don't have admin access.");
    }
}

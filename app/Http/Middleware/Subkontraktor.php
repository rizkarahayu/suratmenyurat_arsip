<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Subkontraktor
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
        // if (auth()->check()) {
        //     return redirect()->route('login');
        // }

        // if (auth()->user()->is_admin == 1) {
        //     return redirect()->route('kadep');
        // }

        // if (auth()->user()->is_admin == 2) {
        //     return redirect()->route('sekretaris');
        // }

        // if (auth()->user()->is_admin == 3) {
        //     return redirect()->route('timpengadaan');
        // }

        // if (auth()->user()->is_admin == 4) {
        //     return $next($request);
        // }
        if(auth()->user()->is_admin == 'subkontraktor'){
            return $next($request);
        }

        return redirect('subkontraktor')->with('error',"You don't have admin access.");
    }
}

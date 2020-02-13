<?php

namespace App\Http\Middleware;

use Closure;

class imiona
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
        for($i=0 ; $i<session('ilosc'); $i++)
        {
            if(!is_string($request->$i))
            {
                return redirect()->route('imiona');
            }
        }
        return $next($request);
    }
}

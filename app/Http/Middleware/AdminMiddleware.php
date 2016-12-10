<?php

namespace Market\Http\Middleware;

use Closure;
//use Illuminate\Support\Facades\Auth;
use Auth;
class AdminMiddleware
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
           if(Auth::User()->email == 'o.romero.lopez@gmail.com'){
               return $next($request);
           }
           else
           {
             return abort(403);
           }
       }
}

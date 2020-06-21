<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckPrivileges
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
        if(auth()->user()->privileges == 1 ){
            return $next($request);
        }
        else{
            Auth::logout();
            return redirect()->to('/')->with('error', 'Utilizador não tem privilégios');
        }
    }
}

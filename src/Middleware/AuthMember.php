<?php

namespace Hosein\Members\Middleware;

use Closure;
use Hosein\Members\members;

class AuthMember
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

        if(session("email")){
            $members=members::where("email",session("email"))->first();
            return redirect("test");
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$userType): Response
    {
       // dd($next($request));
        if(Auth::check()){
            $user = Auth::user(); 
            if ((int)$user->type !== (int)$userType) {
                return redirect('/');
                //abort(403, 'Unauthorized action.'); // Return a 403 Forbidden response for unauthorized access.
            }
            return $next($request);
        }else{
            return redirect('/login');
        }
       
    }
}

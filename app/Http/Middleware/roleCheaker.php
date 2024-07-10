<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class roleCheaker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check())
        {
            if(auth()->user()->role == "student"){
                return $next($request);
            }else{
                return back()->withErrors(['error' => 'your not an authorized user'])->onlyInput('error');
            }
        }else{
            return redirect('/login');
        }
    }
}

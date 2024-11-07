<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{ 
    public function handle(Request $request, Closure $next, string $role): Response
    {
        echo "<h3>We are now in valid user middleware</h3>";
        echo "<h3>Required Role: $role</h3>";
        if(Auth::user()->role == $role){
            return $next($request);
            //rfeturn view('dashboard'); // Ensure 'dashboard' view exists
       }  
        elseif(Auth::user()->role == "reader"){
        return redirect()->route('user');
        //rfeturn view('dashboard'); // Ensure 'dashboard' view exists
        }  
        // if(Auth::check() && Auth::user()->role == $role){
        //      return $next($request);
        //      //rfeturn view('dashboard'); // Ensure 'dashboard' view exists
        // }
        return redirect()->route('login');
    }

    public function terminate(Request $request,Response $response): void
    {
        echo "<h3>we are now terminate User middleware</h3>";             
    }
}

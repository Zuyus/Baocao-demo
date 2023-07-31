<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDemo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(env('APP_DEMO') == true){
            return redirect()->back()->with('error', __('This is a demo version! You can get full access after purchasing the application.'));
        }else{
            return $next($request);
        }
    }
}

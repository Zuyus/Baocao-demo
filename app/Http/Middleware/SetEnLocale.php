<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetEnLocale
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
        app()->setLocale('en');
        session(['APP_LOCALE'=>'en', 'lang_dir' => 'ltr']);
        return $next($request);
    }
}

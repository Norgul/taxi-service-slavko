<?php

namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale') && array_key_exists(session()->get('locale'), config()->get('languages'))) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale(config()->get('app.fallback_locale'));
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Set language
    if (session()->has('locale')) {
        app()->setLocale(session('locale'));
    }

    // Set direction
    if (session()->has('direction')) {
        config(['app.direction' => session('direction')]);
    } else {
        config(['app.direction' => app()->isLocale('ar') ? 'rtl' : 'ltr']);
    }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $desiredLocale = $request->segment(1);
        in_array($desiredLocale, config('app.languages')) ? app()->setLocale($desiredLocale) : app()->setLocale('en');
        $request->route()->forgetParameter('locale');
        URL::defaults(['locale' => app()->getLocale()]);
        return $next($request);
    }
}

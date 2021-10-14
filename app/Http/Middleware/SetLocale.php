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
        in_array($desiredLocale, [
            'en' => 'en',
            'es' => 'es',
            'pt' => 'pt',
            'fi' => 'fi',
            'se' => 'se',
            'no' => 'no',
            'dk' => 'dk',
            'de' => 'de',
            'nl' => 'nl',
            'fr' => 'fr',
            'it' => 'it',
            'ru' => 'ru',
            'tr' => 'tr',
            'jp' => 'jp',
            'cn' => 'cn',
        ]) ? app()->setLocale($desiredLocale) : app()->setLocale('en');
        URL::defaults(['locale' => app()->getLocale()]);
        return $next($request);
    }
}

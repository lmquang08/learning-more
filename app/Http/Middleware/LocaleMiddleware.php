<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
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
        $language = $request->get('lang');
        if (!$language) {
            $language = \Session::get('website_language', config('app.locale'));
        }
        config(['app.locale' => $language]);
        if ($request->segment('1') === 'admin') {
            $language = 'ja';
        }
        require_once app_path('Helpers/const/'.$language.'.php');
        return $next($request);
    }
}

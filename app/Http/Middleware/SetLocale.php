<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Check if a language is set in the session, default to 'en'
        $locale = Session::get('locale', 'English');
        App::setLocale($locale);

        return $next($request);
    }
}

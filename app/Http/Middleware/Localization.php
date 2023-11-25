<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class Localization
{
    public function handle($request, Closure $next)
    {
        app()->setLocale(session('localization',config('app.locale')));
       
        return $next($request);
    }

}

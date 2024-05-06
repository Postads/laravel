<?php

namespace App\Http\Middleware;

use App\Http\Controllers\BaseTrait;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{



    use BaseTrait;

    public function handle(Request $request, Closure $next): Response
    {

        return $next($request);
    }


}

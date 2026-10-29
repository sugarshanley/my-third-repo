<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureClearanceKey
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->query('key') !== 'act2026') {
            return redirect('/unauthorized');
        }

        return $next($request);
    }
}
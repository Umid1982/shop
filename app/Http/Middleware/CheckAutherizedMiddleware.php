<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckAutherizedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $all = $request->all();
        if (isset($all['key'])) {
            Log::debug('token from http param', [$all['key']]);
            $request->headers->set('Authorization', sprintf('%s %s', 'Bearer', $all['key']));
        }
        return $next($request);
    }
}

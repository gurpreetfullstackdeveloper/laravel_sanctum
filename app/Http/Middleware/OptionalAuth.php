
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OptionalAuth {
    public function handle(Request $request, Closure $next) {
        if ($request->bearerToken()) {
            auth()->loginUsingId(auth()->user()->id);
        }
        return $next($request);
    }
}

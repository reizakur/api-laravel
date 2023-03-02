<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiTokenMiddleware{
    public function handle(Request $request, Closure $next)
    {

        if ($request->header("Token") != 'RAMAYANA'){
            return response()->json(
                [
                    'status' => 401,
                    'message' => "Unauthorized"
                ]
                );
        }
        return $next($request);
    }
}
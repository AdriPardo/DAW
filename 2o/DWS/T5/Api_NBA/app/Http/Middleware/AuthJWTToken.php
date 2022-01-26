<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthJWTToken
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
        $alg = 'HS256';
        $jwt = $request->header('token');
        $key = env('JWT_KEY');
        try {
            /* $decoded =  */JWT::decode($jwt, new Key($key, $alg));
/*             return response()->json([$decoded->data]); */
        } catch (\Exception $e) {
            return response()->json(['el token no es valido']);
        }
        return $next($request);
    }
}

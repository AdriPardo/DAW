<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use Illuminate\Support\Str;
use Firebase\JWT\JWT;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('usuario', 'password');

        $usuario = isset($credenciales) ?  Usuario::where('usuario', $request->usuario)->first() : false;

        if (!$usuario || !Hash::check($credenciales['password'], $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            $token = $this->getJWT($usuario);
            return response()->json(['token' => $token]);
/*             $usuario->api_token = Str::random(60);
            $usuario->save();
            return response()->json($usuario->api_token); */
        }
    }

    public function logout(Request $request)
    {
        $tokenCabecera = $request->header('Authorization');
        $token = isset($tokenCabecera) ? ltrim(ltrim($tokenCabecera, 'Bearer')) : false;
        $usuario = $token ?  Usuario::where('api_token', $token)->first() : false;

        if (!$token || !$usuario) {
            return response()->json('Credenciales no validas', 401);
        } else {

            $usuario->api_token = '';
            $usuario->save();
            return response()->json('Se ha cerrado sesion con exito');
        }
    }

    public function refreshToken(Request $request)
    {
        $tokenCabecera = $request->header('Authorization');
        $token = isset($tokenCabecera) ? ltrim(ltrim($tokenCabecera, 'Bearer')) : false;
        $usuario = $token ?  Usuario::where('api_token', $token)->first() : false;

        if (!$token || !$usuario) {
            return response()->json('Refresh token invalido');
        } else {
            $usuario->api_token = Str::random(60);
            $usuario->save();
            return response()->json($usuario->api_token);
        }
    }
    private function getJWT($usuario)
    {
        $time = time();
        $payload = [
            'iat' => $time,
            'nbf' => $time,
            'exp' => $time + 7200,
            'data' => [
                'id' => $usuario->id,
                'usuario' => $usuario->usuario
            ]
        ];
        $key = env('JWT_KEY');
        $alg = 'HS256';
        $token = JWT::encode($payload, $key, $alg);
        return $token;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Firebase\JWT\JWT;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('usuario', 'password');

        $usuario = isset($credenciales) ?  User::where('usuario', $request->usuario)->first() : false;

        if (!$usuario || !Hash::check($credenciales['password'], $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            $usuario->api_token = Str::random(60);
            $usuario->save();
            return response()->json($usuario->api_token, 200);
        }
    }

    public function logout(Request $request)
    {
        $tokenCabecera = $request->header('Authorization');
        $token = isset($tokenCabecera) ? ltrim(ltrim($tokenCabecera, 'Bearer')) : false;
        $usuario = $token ?  User::where('api_token', $token)->first() : false;

        if (!$token || !$usuario) {
            return response()->json('Credenciales no validas', 401);
        } else {

            $usuario->api_token = '';
            $usuario->save();
            return response()->json('Se ha cerrado sesion con exito', 200);
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\RegistroRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;


class AutenticarController extends Controller
{
    public function registro(RegistroRequest $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->direction = $request->direction;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'error' => false,
            'msg' => 'Usuario Registrado'
        ],200);

    }

    public function login(LoginRequest $request){

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'msg' => ['El email o la contraseña no es correcto'],
            ]);
        }

        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'error' => false,
            //'token' => $token
            'msg' => 'Ingreso Exitoso',
            'data' => $user,
            'token'=>$token
        ],200);

    }
}

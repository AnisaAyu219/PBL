<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:25',
            'password' => 'required|confirmed',
            'level' => 'required|max:25'
        ]);

        $user = new user([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);
        $user->save();
        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $login_detail = request(['username', 'password']);

        if (!Auth:: attempt($login_detail)) {
            return response()->json(['error' => 'vincen ganteng'],401);
        }
        
            $user = $request->user();

            $tokenResult = $user->createToken('AccessToken');
            $token = $tokenResult->token;
            $token->save();

            return response()->json([
                'access_token' => 'Bearer'. $tokenResult->accessToken,
                'token_id' => $token->id,
                'user_id' => $token->user_id,
                'username' => $user->username,
                'level' => $user->level,
            ], 200);
        }
}

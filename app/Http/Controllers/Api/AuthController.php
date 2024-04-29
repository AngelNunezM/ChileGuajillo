<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    //index
    public function Index(){
        return response(["message" => "GET API Rest - Up"]);
    }
    
    public function Register(Request $request){
        //validacion de la peticion
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        
        //alta del usuario 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //respuesta del servidor
        return response($user, Response::HTTP_CREATED);
    }
    
    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        if (Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;
            return response(["token" => $token, "user" => $user], Response::HTTP_OK);
        }
        else{
            return response(["message","Crenciales invalidas"],Response::HTTP_UNAUTHORIZED);
        }
    }

    public function GetUserProfile(){
        $user = Auth::user();

        if($user){
            $user->profile;
            return response()->json([
                "userData" => $user
            ], Response::HTTP_OK);
        }
        else{
            return response()->json(Response::HTTP_UNAUTHORIZED);
        }
        
    }

    public function Loggout(){
        return response(["token" => 'no hay token'], Response::HTTP_OK);
    }
}

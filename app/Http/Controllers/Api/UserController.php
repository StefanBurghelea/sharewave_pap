<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('TutsForWeb')->accessToken;
            return response()->json([
                'token' => $token, 
                200,
                'user' => auth()->user()]);
            //return response()->json(['user' => auth()->user()], 200);
  
        
            
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:6',

        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'password' => bcrypt($request->password)
        ]);
 
        $token = $user->createToken('TutsForWeb')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }


}

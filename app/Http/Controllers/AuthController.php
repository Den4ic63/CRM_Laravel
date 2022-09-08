<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authorization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(Authorization $request){

        $formField=$request->only(['email','password']);
        $auth =Auth::attempt($formField);
        if($auth){
            return response()->redirectTo('/index');
        }else{
            return view('auth');
        }

    }

    public function logout()
    {
        Auth::logout();
        return response()->redirectTo('/');
    }


}

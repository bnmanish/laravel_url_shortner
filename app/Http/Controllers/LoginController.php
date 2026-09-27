<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logedin(Request $request){
        // return $request->all();
        $email = $request->email;
        $pass = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $pass])) {
            return ['status' => 200, 'route' => route('dashboard')];
        }else{
            return ['status' => 400, 'message'=> 'wrong credential'];
        }
    }

    public function signup(){
        return view('signup');
    }
}

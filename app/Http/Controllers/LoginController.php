<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logedin(Request $request){
        // return $request->all();
        $email = $request->email;
        $pass = $request->password;
        // return [$email,$pass];

    }

    public function signup(){
        return view('signup');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function features(){
        return view('features');
    }

    public function pricing(){
        return view('pricing');
    }

    public function career(){
        return view('career');
    }

    public function privacyPolicy(){
        return view('privacy');
    }

    public function termsAndConditions(){
        return view('terms-conditions');
    }

    public function disclaimer(){
        return view('disclaimer');
    }
}

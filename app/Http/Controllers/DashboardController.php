<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->role == 'Admin'){
            $data = Link::with(['user', 'company'])->where(['company_id'=>Auth::user()->company_id]);
        }else if(Auth::user()->role == 'Member'){
            $data = Link::with(['user', 'company'])->where(['user_id'=>Auth::user()->id]);
        }else{
            $data = Link::with(['user', 'company']);
        }

        $data = $data->orderBy('created_at', 'desc')->get();

        return view('dashboard',['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserInvitationMail;
use Auth;

class InviteController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('invite/index',['companies'=>$companies]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $company = Auth::user()->role === 'Super Admin' ? $request->company : Auth::user()->company_id;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_id' => $company,
            'role' => Auth::user()->role === 'Super Admin' ? 'Admin' : 'Member',
        ]);

        $company = Company::find($company);

        Mail::to($user->email)->send(
            new UserInvitationMail($user,$company,$request->password)
        );

        return redirect()->back()->with('success', 'Invitation sent successfully. please check your email inbox/Spam/Junk folder.');
    }
}

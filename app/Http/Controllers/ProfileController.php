<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    
    public function profile(){
        $userData = User::find(Auth::user()->id);
        return view('profile')->with(['userData'=>$userData]);
    }

    public function profileUpdate(Request $request){
        $user = $request->user();
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required','email','max:255',Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user->name  = $validated['name'];
        $user->email = $validated['email'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully.',
        ]);
    }
}

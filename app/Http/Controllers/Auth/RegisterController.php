<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $this->validate($request, [
            'email'=>'required|email|unique:users',
            'fullname'=>'required|string|max:255',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'email'=>$request->email,
            'fullname'=>$request->fullname,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Registration succcessful, please login!');
    }
}

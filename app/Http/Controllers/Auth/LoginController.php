<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        return view('auth.login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!auth()->attempt($request->only(['email', 'password']), $request->remember)){

            return back()->with('failed', 'Incorrect login details, please try again');
        }

        return redirect()->route('dashboard');
    }

    public function logout() {

        auth()->logout();

        return redirect()->route('home');
    }
}

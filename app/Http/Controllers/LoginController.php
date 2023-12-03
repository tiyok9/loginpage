<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return response()->view('login.login');
    }


    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = Validator::make($request->only('username','password'),[
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if($credentials->fails()){
            return back()->with('message',$credentials->errors()->first());
        }
        $credentials = $credentials->validate();
        if (Auth::attempt([
            'username' => $credentials['username'],
            'password' => $credentials['password'],

        ])){
            $request->session()->regenerate();
            return redirect()->intended('/');

        }

        return back()->with('message','username atau password salah');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessConteoller extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential, $request->filled('remember'))) {
            return redirect()->intended('dsjfsgfu3ew8csjfbae7ds');
        }

        return redirect()->back()->with('loginFailed', 'Log in failed, please check your email or password again!')->withInput();
    }

    public function basePage()
    {
        return view('admin.base');
    }

    public function dashboardPage()
    {
        return view('admin.dashboard');
    }
}

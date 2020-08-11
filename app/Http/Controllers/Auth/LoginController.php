<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginFormRequest $request)
    {
        // return $request->all();
        $remember = $request->remember_me ? true : false;
        if(!empty($remember)){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
            {
                return redirect()->route('home.index');
            }
        }
        else
        {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                return redirect()->route('home.index');
            }
        }
        
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // $request->session()->invalidate();
        return redirect()->route('login');
    }
}

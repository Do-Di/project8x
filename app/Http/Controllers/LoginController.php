<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials,true))
        {
//            $data = Session::all();
//            dd($data);
            return redirect()->intended('admin');
        }
        else
            return redirect('login');
    }

    public function checkLog()
    {
        if (Auth::check()) {
            // The user is logged in...
//            $data = Session::all();
//            dd($data);

            $user = Auth::user();
            dd($user);
            return "da log";
        }
        else
            return "chua log";
    }
}

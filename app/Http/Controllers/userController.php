<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    
    public function login()
    {
        return view('backend.pages.login');
    }

    public function doLogin(Request $request )
    {
        // *except* will ""ignore"" token and everything will take and *only* will ""take"" the email pass everything will ignore

       // $credentials=$request->except('_token'); 

        $credentials=$request->only('email','password'); 

        if(Auth::attempt($credentials))
        {
            return redirect()->route('base-url');
        }

        return redirect()-> back()->with('messages','Invalid Cresedentials');

    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->back()->with('message','Logout Successfully');
    }
    



}

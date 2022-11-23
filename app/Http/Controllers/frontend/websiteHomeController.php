<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

class websiteHomeController extends Controller
{
    public function webhome()
    {
        return view('frontend.master');
    }



    public function registration(Request $regiRequest)
    {
      User::create([

        'name'=>$regiRequest->name,
        'email'=>$regiRequest->email,
        'password'=>bcrypt( $regiRequest->password),
        'contact'=>$regiRequest->contact,
        'role'=>'user'

      ]);  

      //notify()->success('Registration Successfull !');
      return redirect()->back();

    }



    public function userlogin(Request $loginRequest)
    {
     $loginRequest->validate([

        'email'=>'required',
        'password'=>'required',
     ]);  

        $credentials=$loginRequest->only('email','password');
        if(auth()->attempt($credentials))
        {
             //notify()->success('Login Successfull !');

             return redirect()->back();
        }
        else{

             //notify()->error('Invalid User !');
             return redirect()->back();
        }
        
    }

    public function userlogout()
    {
        auth()->Logout();

        //notify()->success('Logout Successfull');

        return redirect()->back();
    }






    public function tutor()
    {
        return view('frontend.pages.tutor');
    }


}

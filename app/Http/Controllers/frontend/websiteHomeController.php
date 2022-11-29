<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class websiteHomeController extends Controller
{

    public function webhome()
    {
        return view('frontend.pages.body');
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

      notify()->success('Registration Successfull !');
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
             notify()->success('Login Successfull !');

             return redirect()->back();
        }
        else{

             notify()->error('Username & password is not correct!');
             return redirect()->back();
        }
        
    }

    public function userlogout()
    {
        auth()->Logout();

        notify()->success('Logout Successfull');

        return redirect()->back();
    }



    public function userProfile()
    {
        return view('frontend.pages.profile');

    }

    public function UserUpdate (Request $request)
    {
        $userupdate=User::find(auth()->user()->id);

        $userupdate->update([
            'name'=>$request->user_name,
            'contact'=>$request->phone,
            'password'=>$request->password
    
        ]);

        notify('success','Profile Updated Successfully');
        return redirect()->route('web.home');
    }







    public function tutor()
    {
        return view('frontend.pages.tutor');
    }


}

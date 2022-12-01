<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Tutors;
use App\Models\User;
use Database\Seeders\UserTableSeeder;
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





                        //From here Controller for Tutor Page

    public function tutor()
    {
        return view('frontend.pages.tutorsfile.tutorSignUp');
    }


    public function tutorpage()
    {
        $tutorlist=Tutors:: paginate(6);
        return view('frontend.pages.tutors',compact('tutorlist'));
    }

    public function tutorReg(Request $tutorvar)
    {
        // $tutorimgName=null;
        // if($tutorvar->hasFile('images'))
        // {
           
        //     $tutorimgName=date('Ymdhmi').'.'.$tutorvar->file('images')->getClientOriginalExtension();
        //     $tutorvar->file('images')->storeAs('/uploads',$tutorimgName);
        // }



        User::create([
            'name'=>$tutorvar->name,
            'email'=>$tutorvar->email,
            'password'=>bcrypt($tutorvar->password),
            'contact'=>$tutorvar->phone,
            'role'=>'tutor'

        ]);

        notify()->success('Registration Successfully');
        return redirect()->back();

    }

    public function tutorlogin(Request $tutorlogin)
    {
        $tutorlogin->validate([

            'email'=>'required',
            'password'=>'required',
         ]);  
    
            $credentials=$tutorlogin->only('email','password');
            // dd($credentials);

            if(auth()->attempt($credentials))
            {
                 notify()->success('Login Successfull!');
    
                 return redirect()->route('tutor.webpage');
            }
            else{
    
                 notify()->error('Username & password is not correct!');
                 return redirect()->back();
            }
    }

    public function tutorweb()
    {
        $tutorList=Tutors::paginate(6);
        return view('frontend.pages.tutorsfile.tutorprofileList',compact('tutorList'));
    }

    public function tutorprofile()
    {
        return view('frontend.pages.tutorsfile.tutorCreateProfile');
    }

    public function tutorProfileStore(Request $tutorvar)
    {
        $tutorimgName=null;
        if($tutorvar->hasFile('images'))
        {
           
            $tutorimgName=date('Ymdhmi').'.'.$tutorvar->file('images')->getClientOriginalExtension();
            $tutorvar->file('images')->storeAs('/uploads',$tutorimgName);
        }



        Tutors::create([
            'name'=>$tutorvar->name,
            'images'=>$tutorimgName,
            'email'=>$tutorvar->email,
            'contact'=>$tutorvar->phone,
            'n_id'=>$tutorvar->n_id,
            'address'=>$tutorvar->address,
            'subject'=>$tutorvar->subject,
            'salary'=>$tutorvar->salary,
            
            'description'=>$tutorvar->description,
            'login_pass'=>$tutorvar->password,
            'status'=>$tutorvar->status,

        ]);

        notify()->success('Profile Created Successfully');
        return redirect(route('tutor.webpage'));

    }  
    


}

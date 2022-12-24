<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Hiretutors;
use App\Models\Payments;
use App\Models\Subjects;
use App\Models\Tutions;
use App\Models\Tutors;
use App\Models\User;
use Database\Seeders\UserTableSeeder;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class websiteHomeController extends Controller
{

    public function webhome()
    {
        $tutionlist=Tutions::all();
        $tutorlist=User::where('role','tutor')->get();
        return view('frontend.pages.body',compact('tutionlist','tutorlist'));
    }



    public function registration(Request $regiRequest)
    {

      User::create([

        'name'=>$regiRequest->name,
        'email'=>$regiRequest->email,
        'password'=>bcrypt( $regiRequest->password),
        'contact'=>$regiRequest->contact,
        'address'=>$regiRequest->address,
        'role'=>'parents'

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

        return redirect()->route('web.home');
    }



    public function userProfile()
    {
        return view('frontend.pages.profile');
     }

    public function userProfileDetails()
    {
        if(auth()->user() && auth()->user()->role == 'tutor'){

            $tuition = Hiretutors::where('tutor_id',auth()->user()->id)->get();
            $tuitionPost=Tutions::where('tutor_id',auth()->user()->id)->get();

            return view('frontend.pages.userProfileDetails',compact('tuition','tuitionPost'));
            
        }
        else{
            
        $hirelist = Hiretutors::where('parents_id',auth()->user()->id)->get();
        
        return view('frontend.pages.userProfileDetails',compact('hirelist'));
     }
        
    }

    public function tutor_tuition_delete($delete)
    {
        $del=Tutions::find($delete);

        if($del)
        {
            $del->delete();
            notify()->success('Deleted Successfull');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }
    }

    public function tutor_tuition_edit($edit)
    {
        $Tuitionedit=Tutions::find($edit);
        $cls=Classes::all();
        $sub=Subjects::all();

        return view('frontend.pages.tutionfile.tuitionEdit',compact('Tuitionedit','cls','sub'));
    }

    public function tutor_tuition_update(Request $request, $edit)
    {
        // dd($request->all());
        
        $Tuitionedit=Tutions::find($edit);

        $Tuitionedit->update([
            'title'=>$request->title,
            'tutor_id'=>$request->name,
            'class_id'=>$request->class,
            'subject_id'=>$request->subject,
            'salary'=>$request->salary,
            'weekend_days'=>$request->days,
        ]);
        notify()->success('Updated Seccessfull...!');
        return redirect()->route('user.profile');
    }


    public function parents_tutorHire_delete($delete)
    {
        $hireDelete=Hiretutors::find($delete);
        if($hireDelete)
        {
            $hireDelete->delete();
            notify()->success('Deleted Successfull');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }
    }
    public function parents_tutorHire_edit($edit)
    {
        $hireEdit=Hiretutors::find($edit);
        return view('frontend.pages.parentsHireEdit',compact('hireEdit'));
    }
    public function parents_tutorHire_update(Request $request,$edit)
    {
        // dd($request->all());
        $hireEdit=Hiretutors::find($edit);

        $hireEdit->update([

            'student_name'=>$request->name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'parent_contact'=>$request->parents_contact,
            'parent_email'=>$request->parents_email,
            'address'=>$request->address,    
        
        ]);
        
        notify()->success('Update Successful');
        return redirect()->route('user.profile');      
    }



    public function UserUpdate (Request $request)
    {
       // dd($request->all());
        $userupdate=User::find(auth()->user()->id);

        $userupdate->update([
            'name'=>$request->user_name,
            'contact'=>$request->phone,
            'password'=>$request->password,
            'address'=>$request->address,
            'degree'=>$request->degree,            
            
            ]);

        notify('success','Profile Updated Successfully');
        return redirect()->back();
    }





                        //From here Controller for Tutor Page

    public function tutor()
    {
        return view('frontend.pages.tutorsfile.tutorSignUp');
    }


    public function tutorpage()
    {
        $tutorlist=User::where('role','tutor')->get();
        return view('frontend.pages.tutors',compact('tutorlist'));

    }

    public function tutorReg(Request $tutorvar)
    {

        User::create([
            'name'=>$tutorvar->name,
            'email'=>$tutorvar->email,
            'password'=>bcrypt($tutorvar->password),
            'contact'=>$tutorvar->phone,
            'address'=>$tutorvar->address,
            'degree'=>$tutorvar->degree,
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
        $tutorList=User:: where('role','tutor')->get();

        return view('frontend.pages.tutorsfile.tutorprofileList',compact('tutorList'));
    }


    public function tutorDetails()
    {
        return view('frontend.pages.tutorDetails');
    }
    

    public function aboutMe()
    {
        return view('frontend.pages.aboutMe');
    }







    public function TutionPage()
    {
        $tutionlist=Tutions::all();
        return view('frontend.pages.tution',compact('tutionlist'));
    }

    public function Tution_hire($id)
    {
        $tution = Tutions::find($id);
        return view('frontend.pages.tutionfile.tutionHire',compact('tution'));
    }


    public function stdInfoForm(Request $request,$id)
    {
        $tution = Tutions::find($id);
        $tutor = User::where('id',$tution->tutor_id)->pluck('id');
        //dd($tutor);
        Hiretutors::create([
            'tutor_id'=> $tutor[0],
            'parents_id'=>auth()->user()->id,
            'student_name'=>$request->name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'parent_contact'=>$request->parents_contact,
            'parent_email'=>$request->parents_email,
            'address'=>$request->address,

        ]);
        notify()->success('Submitted Successfully');
        return redirect()->route('tution.list');
    }

    public function tution_details($details)
    {
        $tutordetails=Tutions::where('tutor_id',$details)->get();
        return view('frontend.pages.tutionfile.tutionDetails',compact('tutordetails'));
    }

    public function fc_tution_details($id)
    {
        $tutordetails=Tutions::find($id);
        return view('frontend.pages.tutionfile.FCoursetutionDetails',compact('tutordetails'));
    }

    public function hire_delete($delete)
    {
        $hiredelete=Hiretutors::find($delete);

        if($hiredelete)
        {
            $hiredelete-> delete();
            notify()->success('Deleted Successful');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }

    }

    public function tuition_post()
    {
        $cls=Classes::all();
        $sub=Subjects::all();
        $tutorId=User::where('role','tutor')->get();
        return view('frontend.pages.tutionfile.tuitionPost',compact('cls','sub','tutorId'));
    }

    public function tuition_store(Request $request)
    {
       Tutions::create([
            'title'=>$request->title,
            'tutor_id'=>auth()->user()->id,
            'class_id'=>$request->class,
            'subject_id'=>$request->subject,
            'salary'=>$request->salary,
            'weekend_days'=>$request->days,

       ]);
       notify()->success('Submitted Successful');
       return redirect()->route('tutor.webpage');
    }

    public function tuitionDelete($delete)
    {
        $tuitiondelete=Hiretutors::find($delete);

        if($tuitiondelete)
        {
            $tuitiondelete->delete();
            notify()->success('Deleted Successfull');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }
    }

    public function status_update($id)
    {
        $tution = Hiretutors::find($id)->update([
            'status'=>'accepted'
        ]);
        return back();
    }

    




}

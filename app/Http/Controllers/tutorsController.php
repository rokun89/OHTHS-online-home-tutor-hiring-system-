<?php

namespace App\Http\Controllers;

use App\Models\Tutors;
use Illuminate\Http\Request;

class tutorsController extends Controller
{
    public function tutorForm()
    {
        return view('backend.pages.categories.tutorsform');

    }

    public function tutor_store(Request $tutorvar)
    {
        //dd($tutorvar->all());

        /*$tutorvar->validate(['name'=>'required']);
        $tutorvar->validate(['images'=>'required']);
        $tutorvar->validate(['email'=>'required']);
        $tutorvar->validate(['contact'=>'required']);
        $tutorvar->validate(['n_id'=>'required']);
        $tutorvar->validate(['address'=>'required']);
        $tutorvar->validate(['subject'=>'required']);
        $tutorvar->validate(['salary'=>'required']); */



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
            'occupation'=>$tutorvar->occupation,
            'description'=>$tutorvar->description,
            'login_pass'=>$tutorvar->password,
            'status'=>$tutorvar->status,

        ]);

        return redirect(route('tutor-url'))->with('message','Submitted Successfully!');

    }


    public function deleteTutorInfo($deleteTutor)
    {
        $deletetutorTest=Tutors::find($deleteTutor);

        if($deletetutorTest)
        {
            $deletetutorTest-> delete();
            return redirect()->back()->with('messages','Deleted Succesfully!');

        }
        else{
            return redirect()->back()->with('errormsg','Request Not Found');
        }


    }

    public function viewtutorInfo($viewtutor)
    {
        $viewtutorTest=Tutors::find($viewtutor);

        return view('backend.pages.tutorDataView',compact('viewtutorTest'));
    }

    


}

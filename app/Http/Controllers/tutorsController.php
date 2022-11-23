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

        $tutorvar->validate([
            'name'=>'required',
            'images'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'n_id'=>'required',
            'address'=>'required',
            'subject'=>'required',
            'salary'=>'required',
        
        ]);



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

    

    public function edit($edit)
    {
        $editTest=Tutors::find($edit);
        $tutor=Tutors::all();
        return view('backend.pages.categories.tutorEdit',compact('editTest','tutor'));
    }


    public function update(Request $request1,$edit)
    {
        $editTest=Tutors::find($edit);

        $tutorupdate=$editTest->images;

    if($request1->hasFile('images'))
        {
            
            $tutorupdate=date('Ymdhmi').'.'.$request1->file('images')->getClientOriginalExtension();
            $request1->file('images')->storeAs('/uploads',$tutorupdate);
        }


        $editTest->update([
            'name'=>$request1->name,
            'images'=>$tutorupdate,
            'email'=>$request1->email,
            'contact'=>$request1->phone,
            'n_id'=>$request1->n_id,
            'address'=>$request1->address,
            'subject'=>$request1->subject,
            'salary'=>$request1->salary,
            
            'description'=>$request1->description,
            'login_pass'=>$request1->password,
            'status'=>$request1->status,
        ]);

        return redirect()->route('tutor-url')->with('messages','Updated Successfully!!');

    }

}

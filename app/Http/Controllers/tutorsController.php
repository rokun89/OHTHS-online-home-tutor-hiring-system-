<?php

namespace App\Http\Controllers;

use App\Models\Tutors;
use App\Models\User;
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

        // $tutorvar->validate([
        //     'name'=>'required',
        //     'images'=>'required',
        //     'email'=>'required',
        //     'contact'=>'required',
        //     'n_id'=>'required',
        //     'address'=>'required',
        //     'subject'=>'required',
        //     'salary'=>'required',
        
        // ]);



            $tutorimgName=null;
        if($tutorvar->hasFile('images'))
        {
           
            $tutorimgName=date('Ymdhmi').'.'.$tutorvar->file('images')->getClientOriginalExtension();
            $tutorvar->file('images')->storeAs('/uploads',$tutorimgName);
        }



        User::create([
            'name'=>$tutorvar->name,
            'email'=>$tutorvar->email,
            'password'=>bcrypt($tutorvar->password),
            'contact'=>$tutorvar->phone,
            'address'=>$tutorvar->address,
            'subject'=>$tutorvar->subject,
            'salary'=>$tutorvar->salary,
            'images'=>$tutorimgName,
            'role'=>'tutor'

        ]);

        notify()->success('Submitted Successfully');
        return redirect(route('tutor-url'));

    }


    public function deleteTutorInfo($deleteTutor)
    {
        $deletetutorTest=User::find($deleteTutor);

        if($deletetutorTest)
        {
            $deletetutorTest-> delete();
            notify()->success('Delete Successfull');
            return redirect()->back();

        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back()->with('errormsg','Request Not Found');
        }


    }

    public function viewtutorInfo($viewtutor)
    {
        $viewtutorTest=User::find($viewtutor);

        return view('backend.pages.tutorDataView',compact('viewtutorTest'));
    }

    

    public function edit($edit)
    {
        $editTest=User::find($edit);
        $tutor=User::all();
        return view('backend.pages.categories.tutorEdit',compact('editTest','tutor'));
    }


    public function update(Request $request1,$edit)
    {
        $editTest=User::find($edit);

        $editTest->update([
            'name'=>$request1->name,
            'email'=>$request1->email,
            'contact'=>$request1->phone,
            'address'=>$request1->address,
            'degree'=>$request1->degree,
            'role'=>'tutor'
        ]);
        notify()->success('Update Successfull');
        return redirect()->route('tutor-url');
    }

}

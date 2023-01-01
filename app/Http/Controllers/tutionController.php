<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subjects;
use App\Models\Tutions;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Http\Request;

class tutionController extends Controller
{
    
    public function tutionForm()
    {
        $cls=Classes::all();
        $sub=Subjects::all();
        $tutorId=User::where('role','tutor')->get();
        return view('backend.pages.categories.tutionsForm',compact('cls','sub','tutorId'));
    }


    public function tution_form_store(Request $request)
    {
        // dd($request->all());

        Tutions::create([
            'title'=>$request->title,
            'tutor_id'=>$request->tutor,
            'class_id'=>$request->class,
            'subject_id'=>$request->subject,
            'salary'=>$request->salary,
            'weekend_days'=>$request->days,

        ]);

        notify()->success('Submitted Succesfull');
        return redirect()->route('tution-url');
    }

    public function delete($delete)
    {
        $deleteTution=Tutions::find($delete);

        if($deleteTution)
        {
            $deleteTution->delete();
            notify()->success('Deleted Successful');
            return redirect()->back();

        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }
    }

    public function view($view)
    {
        $viewTution=Tutions::find($view);

        return view('backend.pages.tutionDataView',compact('viewTution'));
    }

    public function edit($edit)
    {
        $editTution=Tutions::find($edit);

        return view('backend.pages.categories.tutionEdit',compact('editTution'));
    }

    public function update(Request $request,$edit)
    {
        $editTution=Tutions::find($edit);

        $editTution->update([
            'title'=>$request->title,
            'tutor_id'=>$request->tutor,
            'class_id'=>$request->class,
            'subject_id'=>$request->subject,
            'salary'=>$request->salary,
            'weekend_days'=>$request->days,

        ]);
        notify()->success('Update Successfull');
        return redirect()->route('tution-url');

    }
    
    public function tuition_post_status_update($id)
    {
        $tuitionpost=Tutions::find($id)->update([
            'status'=>'accepted'
        ]);
        return redirect()->back();
    }

    public function tuition_post_status_delete($id)
    {
        $tuitionpost=Tutions::find($id);

        if($tuitionpost)
        {
            $tuitionpost->delete();
            return back();
        }
        else{
            notify()->error('Request Not Found');
            return back();
        }
    }


}

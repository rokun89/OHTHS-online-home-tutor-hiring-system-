<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subjects;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function subjectForm()
    {
        $cls=Classes::all();
        return view('backend.pages.categories.subjectform',compact('cls'));

    }

    public function subjectStore(Request $subjectVar)
    {
       // dd($subjectVar->all());

        // $subjectVar->validate([
        //     'tutor_name'=>'required',
        //     'subject'=>'required',
        //     'class'=>'required',
        //     'day'=>'required',
        //     'time'=>'required',

        // ]);


        Subjects::create([

            'name'=>$subjectVar->name,
            
            'class_id'=>$subjectVar->class,
            

        ]);

        
        return redirect(route('subject-url'));

    }

    public function delete($delete)
    {
        $deleteTest= Subjects::find($delete);
        if($deleteTest)
        {
            $deleteTest-> delete();
            notify()->success('delete successful');

            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }

    }

        public function view($view)
        {
            $viewTest= Subjects::find($view);

            return view('backend.pages.subjectDataView',compact('viewTest'));
        }

        public function edit($edit)
        {
            $editTest= Subjects::find($edit);
            $sub=Subjects::all();
            return view('backend.pages.categories.subjectEdit',compact('sub','editTest'));
        }

        public function update(Request $request1,$edit)
        {
            $editTest=Subjects::find($edit);


            $editTest->update([
                'name'=>$request1->name,
                
                'class_id'=>$request1->class,
                
                
              ]); 

              notify()->success('update successfully');
              return redirect(route('subject-url'));
        }



}

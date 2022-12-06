<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\students;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class studentController extends Controller
{
    
    public function stdPage()
    {
        return view('backend.pages.categories.stdform');
    }

public function std_store(Request $stdvar)
{
    //dd($stdvar->all());

  $stdvar->validate([
    'name'=>'required',
    'images'=>'required',
    'email'=>'required',
    'contact'=>'required',
    'address'=>'required',
    
    ]);

    $testName=null;
    if($stdvar->hasFile('images'))
        {
            
            $testName=date('Ymdhmi').'.'.$stdvar->file('images')->getClientOriginalExtension();
            $stdvar->file('images')->storeAs('/uploads',$testName);
        }


    students::create([
        'name'=>$stdvar->name,
        'images'=>$testName,
        'email'=>$stdvar->email,
        'contact'=>$stdvar->contact,
        'login_pass'=>$stdvar->password,
        'address'=>$stdvar->address,
        'status'=>$stdvar->status,
    ]);
    notify()->success('Submitted Successfully');
    return redirect(route('students-url'));

}
   
    public function deleteStdInfo( $stdInfo)
    {
        $deletestdTest=students::find($stdInfo);
        //dd($stdInfo);
        if($deletestdTest){

            $deletestdTest-> delete();
            notify()->success('Delete Successfull');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();

        }

    }
    public function viewStdInfo($viewstdInfo)
    {
      $viewstdTest=students::find($viewstdInfo); 
      //dd($viewstdTest);
      return view('backend.pages.viewdatabase',compact('viewstdTest'));
        
    }



    public function edit($edit)
    {
        $editTest=students::find($edit);

        $test2=students::all();

        return view('backend.pages.categories.studentsEdit',compact('test2','editTest'));

    }


    public function update(Request $request1,$edit)
    {
        $editTest=students::find($edit);

        $studentsupdate=$editTest->images;

    if($request1->hasFile('images'))
        {
            
            $studentsupdate=date('Ymdhmi').'.'.$request1->file('images')->getClientOriginalExtension();
            $request1->file('images')->storeAs('/uploads',$studentsupdate);
        }

        $editTest->update([
            'name'=>$request1->name,
            'images'=>$studentsupdate,
            'email'=>$request1->email,
            'contact'=>$request1->contact,
            'login_pass'=>$request1->password,
            'address'=>$request1->address,
            'status'=>$request1->status,
        ]);

        notify()->success('Update Successfull');
        
        return redirect()->route('students-url');

    }












    public function clsPage()
    {
        return view('backend.pages.categories.clsform');
    }

    public function cls_store(Request $request)
    {
        Classes::create([
            'name'=>$request->name,
        ]);

        notify()->success('Submitted Successfully');
        return redirect(route('class-url'));
    }

    public function cls_delete($delete)
    {
        $clsdelete=Classes::find($delete);

        if($clsdelete)
        {
            $clsdelete->delete();
            notify()->success('Deleted Successfully');
            return redirect()->back();
        }
        else{
            notify()->error('Request Not Found');
            return redirect()->back();
        }

    }




}

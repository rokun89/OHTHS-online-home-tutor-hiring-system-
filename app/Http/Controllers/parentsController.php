<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\parents;
use Illuminate\Http\Request;

class parentsController extends Controller
{

    public function createPage()
{
  
    return view('backend.pages.categories.parentsform');
}



public function store(Request $request)
{
  //dd($request->all());
  
  $request->validate([
    'name'=>'required',
    'images'=>'required',
    'email'=>'required',
    'contact'=>'required',
    'n_id'=>'required',
    'address'=>'required'

    ]);


  $parentsvarName=null;
  if($request->hasFile('images'))
      {
          
          $parentsvarName=date('Ymdhmi').'.'.$request->file('images')->getClientOriginalExtension();
          $request->file('images')->storeAs('/uploads',$parentsvarName);
      }
    

      parents::create([
        'images'=>$parentsvarName,
        'name'=>$request->name,
        'email'=>$request->email,
        'login_pass'=>$request->password,
        'address'=>$request->address,
        'status'=>$request->status,
        'contact'=>$request->contact,
        'n_id'=>$request->n_id,
        'description'=>$request->description,
        'occupation'=>$request->occupation,
      ]); 
      notify()->success('Submitted Successfully!');
      return redirect(route('parents-url'));

}

    public function deleteparentsInfo($deleteparentsInfo)
    {
        $deleteparentsTest= parents::find($deleteparentsInfo);

        if($deleteparentsTest){

            $deleteparentsTest-> delete();
            notify()->success('Delete Successfull');
            return redirect()->back();
        }
        else{

            notify()->error('Request Not Found');
            return redirect()->back();

        }
    }

    public function viewparentsInfo($viewparentsInfo)
    {
        $viewparentsTest=parents::find($viewparentsInfo);

        return view('backend.pages.parentsDataView',compact('viewparentsTest'));

    }

public function edit($edit)
{

    $editTest=parents::find($edit);

    $test=parents::all();

    return view('backend.pages.categories.parentsEdit',compact('test','editTest'));


}

public function update(Request $request1,$edit)
{
    $editTest=parents::find($edit);

    $parentsupdate=$editTest->images;

  if($request1->hasFile('images'))
      {
          
          $parentsupdate=date('Ymdhmi').'.'.$request1->file('images')->getClientOriginalExtension();
          $request1->file('images')->storeAs('/uploads',$parentsupdate);
      }


      $editTest->update([
        'images'=>$parentsupdate,
        'name'=>$request1->name,
        'email'=>$request1->email,
        'login_pass'=>$request1->password,
        'address'=>$request1->address,
        'status'=>$request1->status,
        'contact'=>$request1->contact,
        'n_id'=>$request1->n_id,
        'description'=>$request1->description,
        'occupation'=>$request1->occupation,
      ]); 
      
      notify()->success('Update Successfull');
      return redirect()->route('parents-url');

}


}

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

      return redirect(route('parents-url'))->with('message','Submitted Successfully!');

}

    public function deleteparentsInfo($deleteparentsInfo)
    {
        $deleteparentsTest= parents::find($deleteparentsInfo);

        if($deleteparentsTest){

            $deleteparentsTest-> delete();
            return redirect()->back()->with('messages','Delete Succesfully!');
        }
        else{

            return redirect()->back()->with('errormsg','Request Not Found');

        }
    }

    public function viewparentsInfo($viewparentsInfo)
    {
        $viewparentsTest=parents::find($viewparentsInfo);

        return view('backend.pages.parentsDataView',compact('viewparentsTest'));

    }



}

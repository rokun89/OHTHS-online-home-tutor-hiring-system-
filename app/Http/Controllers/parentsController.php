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
  
 $request->validate(['name'=>'required']);
  $request->validate(['images'=>'required']);
  $request->validate(['email'=>'required']);
  $request->validate(['contact'=>'required']);
  $request->validate(['n_id'=>'required']);
  $request->validate(['address'=>'required']);


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




}

<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class studentController extends Controller
{
    
    public function stdPage()
    {
        return view('backend.pages.categories.stdform');
    }

public function std_store(Request $stdvar)
{
    //dd($stdvar->all());

  /*$stdvar->validate(['name'=>'required']);
  $stdvar->validate(['images'=>'required']);
  $stdvar->validate(['email'=>'required']);
  $stdvar->validate(['contact'=>'required']);
  $stdvar->validate(['address'=>'required']);*/

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

    return redirect(route('students-url'))->with('message','Submitted Successfully!');


}

}

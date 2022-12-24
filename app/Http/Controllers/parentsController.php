<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\parents;
use App\Models\User;
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
    

      User::create([
        'images'=>$parentsvarName,
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'role'=>'parents',
      ]); 
      notify()->success('Submitted Successfully!');
      return redirect(route('parents-url'));

}

    public function deleteparentsInfo($deleteparentsInfo)
    {
        $deleteparentsTest= User::find($deleteparentsInfo);

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
        $viewparentsTest=User::find($viewparentsInfo);

        return view('backend.pages.parentsDataView',compact('viewparentsTest'));

    }

public function edit($edit)
{

    $editTest=User::find($edit);

    $test=User::where('role','parents');

    return view('backend.pages.categories.parentsEdit',compact('test','editTest'));


}

public function update(Request $request1,$edit)
{
    $editTest=User::find($edit);


      $editTest->update([
        'name'=>$request1->name,
        'email'=>$request1->email,
        'contact'=>$request1->contact,
        'address'=>$request1->address,
        'role'=>'parents',
      ]); 
      
      notify()->success('Update Successfull');
      return redirect()->route('parents-url');

}


}

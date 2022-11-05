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

      parents::create([
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

      return redirect()->back();


      

}




}

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


    students::create([
        'name'=>$stdvar->name,
        'email'=>$stdvar->email,
        'contact'=>$stdvar->contact,
        'login_pass'=>$stdvar->password,
        'address'=>$stdvar->address,
        'status'=>$stdvar->status,
    ]);

return redirect()->back();


}

}

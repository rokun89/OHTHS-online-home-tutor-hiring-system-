<?php

namespace App\Http\Controllers;

use App\Models\Tutors;
use Illuminate\Http\Request;

class tutorsController extends Controller
{
    public function tutorForm()
    {
        return view('backend.pages.categories.tutorsform');

    }

    public function tutor_store(Request $tutorvar)
    {
        //dd($tutorvar->all());

        Tutors::create([
            'name'=>$tutorvar->name,
            'email'=>$tutorvar->email,
            'contact'=>$tutorvar->phone,
            'n_id'=>$tutorvar->n_id,
            'address'=>$tutorvar->address,
            'subject'=>$tutorvar->subject,
            'salary'=>$tutorvar->salary,
            'occupation'=>$tutorvar->occupation,
            'description'=>$tutorvar->description,
            'login_pass'=>$tutorvar->password,
            'status'=>$tutorvar->status,

        ]);

        return redirect()->back();

    }
    


}

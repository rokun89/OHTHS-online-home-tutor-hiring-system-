<?php

namespace App\Http\Controllers;

use App\Models\parents;
use App\Models\students;
use Illuminate\Http\Request;

class backendController extends Controller
{
    
    public function home()
    {
     
      //return view('backend.master');   

      return view('backend.pages.dashboard'); 
    }


public function frontend()
    {
        return view('frontend.frontend'); //simple frontend controller
    }
        



    //*Thoose are the for pages controller

public function parentsPage()
{
    $test=parents::all(); //for query select * from categories; this the method

    //dd($test);

    return view('backend.pages.parents',compact('test'));
}




public function studentsPage()
{
    $test2=students::all();

    return view('backend.pages.students',compact('test2'));
    
}



public function tutorPage()
{
    return view('backend.pages.tutor');
}

public function tutionPage()
{
    return view('backend.pages.tution');
}

public function paymentsPage()
{
    return view('backend.pages.payments');
}

public function servicePage()
{
    return view('backend.pages.service');
}

public function contactPage()
{
    return view('backend.pages.contact');
}

public function aboutPage()
{
    return view('backend.pages.about');
}




}








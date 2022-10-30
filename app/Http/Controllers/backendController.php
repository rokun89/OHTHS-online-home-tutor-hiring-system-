<?php

namespace App\Http\Controllers;

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
    return view('backend.pages.parents');
}

public function studentsPage()
{
    return view('backend.pages.students');
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








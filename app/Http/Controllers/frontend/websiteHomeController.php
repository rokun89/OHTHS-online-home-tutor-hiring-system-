<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteHomeController extends Controller
{
    public function webhome()
    {
        return view('frontend.master');
    }


    public function registration()
    {
        return view('frontend.pages.registrationForm');

    }

    public function userlogin()
    {
        return view('frontend.pages.loginform');
    }

    public function tutor()
    {
        return view('frontend.pages.tutor');
    }


}

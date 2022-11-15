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
}

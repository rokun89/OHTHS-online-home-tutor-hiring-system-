<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutionController extends Controller
{
    
    public function tutionForm()
    {
        return view('backend.pages.categories.tutionsForm');
    }

}

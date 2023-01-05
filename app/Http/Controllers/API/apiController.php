<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function tutor_api()
    {
        $tutorApi = User::where('role','tutor')->get();
        return response()->jason([
            'success'=>true,
            '$data'=>$tutorApi,
            'message'=>'All Tutor List.'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Hiretutors;
use App\Models\parents;
use App\Models\Payments;
use App\Models\students;
use App\Models\Subject;
use App\Models\Subjects;
use App\Models\Tutions;
use App\Models\Tutors;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class backendController extends Controller
{
    
    public function home()
    {   

      $stdinfo=Hiretutors::with('parent')->get();

      return view('backend.pages.dashboard',compact('stdinfo')); 
    }

    public function Report()
    {
        
    }
        



    //*Thoose are the for pages controller

public function parentsPage()
{
    $test=User::where('role','parents')->paginate(5);

    //paginate(5); //for query select * from categories; this the method

    //dd($test);

    return view('backend.pages.parents',compact('test'));
}




public function studentsPage()
{
    $test2=students::paginate(5);

    return view('backend.pages.students',compact('test2'));
    
}



public function tutorPage()
{
    $tutor=User::where('role','tutor')->paginate(5);


    return view('backend.pages.tutor',compact('tutor'));
}





public function tutionPage()
{
    $tution=Tutions::with('class','subject','tutor')->get();
    // dd($tution);

    return view('backend.pages.tution',compact('tution'));
}




public function subjectPage()
{
    $sub=Subjects::paginate(5);

    return view('backend.pages.subject',compact('sub'));
}



public function classpage()
{
    $cls=Classes::all();
    return view('backend.pages.class',compact('cls'));
}


public function paymentsPage()
{
    $pay=Payments::all();
    return view('backend.pages.payments',compact('pay'));
}

public function reportPage()
{
    return view('backend.pages.report');

}

public function reportSearch(Request $request)
{
    
    $request->validate([
    'from_date'    => 'required|date',
    'to_date'      => 'required|date|after:from_date',
     ]);


    // $validator = Hiretutors::make($request->all(), [
    //     'from_date'    => 'required|date',
    //     'to_date'      => 'required|date|after:from_date',
    // ]);

//     if($validator->fails())
//         {
// //            notify()->error($validator->getMessageBag());
//             notify()->error('From date and to date required and to date should greater then from date.');
//             return redirect()->back();
//         }
//         $from=$request->from_date;
//         $to=$request->to_date;
 
 
 //       $status=$request->status;
        $hires=Hiretutors::whereBetween('created_at', [$request->from_date,
        
        $request->to_date])->get();
        // dd($hires);
        return view('backend.pages.report',compact('hires'));

    }




public function aboutPage()
{
    return view('backend.pages.about');
}




}








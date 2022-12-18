<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;

class paymentsController extends Controller
{
    public function payments_form_page()
    {
        return view('backend.pages.categories.paymentsform');

    }

    public function payments_store(Request $paymentsvar)
    {
        //dd($paymentsvar->all());


        Payments::create([
            'tutor_name'=>$paymentsvar->name,
            'tutor_contact'=>$paymentsvar->contact,
            'amount'=>$paymentsvar->amount,
            'dew'=>$paymentsvar->dew,
            'date'=>$paymentsvar->date,
        ]);

        notify()->success('Submitted Successfully');
        return redirect()->route('payments-url');

    }

    
    public function pay_fees()
    {
        return view('frontend.pages.paymentsfile.PayFeesForm');
    }

    public function fees_submit(Request $request)
    {
        Payments::create([
            'tutor_name'=>$request->name,
            'tutor_contact'=>$request->contact,
            'amount'=>$request->amount,
            'dew'=>$request->dew,
            'date'=>$request->date,

        ]);
        notify()->success('Submitted Successful');
        return redirect()->route('user.profile');
        
    }


}

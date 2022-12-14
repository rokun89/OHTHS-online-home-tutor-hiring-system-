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

        /*$paymentsvar->validate(['payment_date'=>'required']);
        $paymentsvar->validate(['parent_student_name'=>'required']);
        $paymentsvar->validate(['parent_student_contact'=>'required']);
        $paymentsvar->validate(['payment_amount'=>'required']);*/


        Payments::create([
            'name'=>$paymentsvar->name,
            'contact'=>$paymentsvar->contact,
            'amount'=>$paymentsvar->amount,
            'dew'=>$paymentsvar->dew,
            'date'=>$paymentsvar->date,
            'status'=>$paymentsvar->status,
        ]);

        notify()->success('Submitted Successfully');
        return redirect()->route('payments-url');

    }




}

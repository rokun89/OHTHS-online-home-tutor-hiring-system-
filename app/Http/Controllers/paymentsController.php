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
            'payment_date'=>$paymentsvar->date,
            'parent_student_name'=>$paymentsvar->name,
            'parent_student_contact'=>$paymentsvar->contact,
            'payment_amount'=>$paymentsvar->amount,
        ]);

        return redirect(route('payment-url'))->with('message','Submitted Successfully!');

    }




}

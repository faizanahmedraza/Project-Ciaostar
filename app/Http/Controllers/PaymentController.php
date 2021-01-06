<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    public function proceed()
    {
        $details = DB::table('order_histories')
                ->latest()->first();
        return view('website.completePaynow',compact('details'));
    }

    public function proceedToPayment(Request $request)
    {
        $pay = new Payment;
        $pay->email = $request->email;
        $pay->password = $request->password;
        $pay->save();
        return redirect('/stripe');
    }

    public function stripe()
    {
        return view('website.payment');
    }

}

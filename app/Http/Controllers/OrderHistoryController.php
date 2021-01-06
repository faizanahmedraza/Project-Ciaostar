<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function getRequestForm($id)
    {
        $show = \Illuminate\Support\Facades\DB::table('enrolls')
        ->where('id',$id)->first();
        return view('website.requestform',['id' => $show->id]);
    }
    public function requestForm(Request $request)
    {
        $user = $request->session()->get('user');
        $email = $user->email;
        $order = new OrderHistory;
        $order->user_email = $email;
        $order->celebrity_email = $request->user_email;
        $order->who = $request->who;
        $order->occasion = $request->occasion;
        $order->gift = $request->gift;
        $order->ex_birth = $request->ex_birth;
        $order->to = $request->to;
        $order->from = $request->from;
        $order->show_ciaostar = $request->show_ciaostar;
        $order->phone_number = $request->phone_number;
        $order->save();
        $request->session()->put('order',$order->celebrity_email);
        return redirect()->route('payment.now');
    }
}

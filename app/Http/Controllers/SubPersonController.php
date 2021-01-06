<?php

namespace App\Http\Controllers;

use App\Models\SubPerson;
use Illuminate\Http\Request;

class SubPersonController extends Controller
{
    public function subscribeLogin(Request $request)
    {
        $subs = new SubPerson;
        $subs->email = $request->email;
        $subs->save();
        return redirect('/login');
    }
    public function subscribeRegister(Request $request)
    {
        $subs = new SubPerson;
        $subs->email = $request->email;
        $subs->save();
        return redirect('/register');
    }
}

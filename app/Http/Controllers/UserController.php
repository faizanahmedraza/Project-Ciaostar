<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required|date_format:Y-m-d',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->dob = $request->dob;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        $request->session()->flash('message', 'You have been successfully registered!');
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $uemail = User::select('email')->where('email', '=', $request->email)->first();
        $upass = User::select('password')->where('password', $request->password)->first();

        if ($uemail) {
            if ($upass) {
                $request->session()->put('user', $uemail);
                return redirect('/');
            } else {
                return redirect('/login')->with('message', 'Email and Password Not Match');
            }
        } else {
            return redirect('/login')->with('message', 'Please provide a correct credentials!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->flash('message', 'Successfully Logout!');
        return redirect()->route('login');
    }
}

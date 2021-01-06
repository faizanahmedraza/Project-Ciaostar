<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollController extends Controller
{
    public function showEnrollment()
    {
        return view('auth.enroll');
    }

    public function reqDetails()
    {
        $celebrity = Enroll::take(5)->get();
        return view('website.req-details', compact('celebrity'));
    }

    public function getAll()
    {
        $celebrity = DB::table('enrolls')
            ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
            ->select('enrolls.*', 'user_images.profile_img')
            ->take(6)
            ->get();
        $images = DB::table('video_to_all')->get();
        return view('ciaostar', compact('celebrity','images'));
    }

    public function enrollment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'profession' => 'required|string',
            'price' => 'required|numeric',
            'stage' => 'required|numeric',
            'social' => 'required|string',
            'followers' => 'required|numeric',
        ]);
        $enroll = new Enroll;
        $enroll->name = $request->name;
        $enroll->email = $request->email;
        $enroll->phone_number = $request->phone;
        $enroll->profession = $request->profession;
        $enroll->price = $request->price;
        $enroll->stage_number = $request->stage;
        $enroll->social_media = $request->social;
        $enroll->followers = $request->followers;
        $enroll->save();
        if($request->session()->get('user')){
            $request->session()->flash('message','You have been Enrolled as Star!!');
            return redirect()->route('/');
        } else {
            return redirect()->route('login');
        }
    }

    public function celArtist()
    {
        $celebrity = DB::table('enrolls')
        ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
        ->select('enrolls.*', 'user_images.profile_img')
        ->get();
        return view('celebrity.artists', compact('celebrity'));
    }
    public function celActor()
    {
        $celebrity = DB::table('enrolls')
        ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
        ->select('enrolls.*', 'user_images.profile_img')
        ->get();
        return view('celebrity.actors', compact('celebrity'));
    }
    public function celSinger()
    {
        $celebrity = DB::table('enrolls')
        ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
        ->select('enrolls.*', 'user_images.profile_img')
        ->get();
        return view('celebrity.singers', compact('celebrity'));
    }
    public function celAthlete()
    {
        $celebrity = DB::table('enrolls')
        ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
        ->select('enrolls.*', 'user_images.profile_img')
        ->get();
        return view('celebrity.athletes', compact('celebrity'));
    }
}
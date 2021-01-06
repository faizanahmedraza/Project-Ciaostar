<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CelebrityController extends Controller
{
     public function profile()
    {
        $user = Session::get('user');
        $user_image = DB::table('user_images')->where('email',$user->email)->first();
        return view('website.celibrity-profile',compact('user_image'));
    }
    public function profileImg(Request $request)
    {
        $request->validate([
            'profileimg' => 'required'
        ]);
        if($request->hasFile('profileimg'))
        {
            $destination_path = 'public/images';
            $image_name = $request->file('profileimg')->getClientOriginalName();
            $path = $request->file('profileimg')->storeAs($destination_path,$image_name);
        }
        $user = $request->session()->get('user');
        $enid = DB::table('enrolls')->where('email',$user->email)->first();
        DB::table('user_images')->insert([
            ['email' => $user->email,'enroll_id' => $enid->id, 'profile_img' => $image_name],
        ]);
        
        return redirect('/dashboard/celebrity-profile');
    }
    public function profileImage(Request $request)
    {
        $request->validate([
            'profileimg' => 'required'
        ]);
        if($request->hasFile('profileimg'))
        {
            $destination_path = 'public/images';
            $image_name = $request->file('profileimg')->getClientOriginalName();
            $path = $request->file('profileimg')->storeAs($destination_path,$image_name);
        }
        $user = $request->session()->get('user');
        $enid = DB::table('enrolls')->where('email',$user->email)->first();
        DB::table('user_images')->insert([
            ['email' => $user->email,'enroll_id' => $enid->id, 'profile_img' => $image_name],
        ]);
        
        return redirect('/dashboard/profile');
    }
    
    public function videoClient(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);   
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images';
            $image_name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
        }
        $user = $request->session()->get('user');
        DB::table('video_clients')->insert([
            ['email' => $user->email, 'video' => $image_name],
        ]);
        return redirect()->route('celebrity.profile');
    }

    public function videoAll(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);   
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images';
            $image_name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
        }
        $user = $request->session()->get('user');
        DB::table('video_to_all')->insert([
            ['email' => $user->email, 'video' => $image_name],
        ]);
        return redirect()->route('request.details');
    }
}

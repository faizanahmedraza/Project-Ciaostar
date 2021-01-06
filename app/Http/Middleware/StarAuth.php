<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Enroll;

class StarAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->session()->get('user');
        $star = Enroll::where('email',$user->email)->first();
        if($star)
        {
            return $next($request);
        }
        return redirect('/dashboard/profile');  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClerkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            $user_role = Auth::user()->user_role;
            if($user_role == 3){
                return $next($request);
            }else{
                return redirect ("logout");
            }
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clerkDashboard()
    {
        return view('dashboards.clerk_dashboard');
    }
}

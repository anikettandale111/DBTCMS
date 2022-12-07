<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {
        if($user->user_role == 1) {
            return redirect('/admin-dashboard');
        }else if($user->user_role == 2) {
            return redirect('/principal-dashboard'); 
        }else if($user->user_role == 3) {
            return redirect('/clerk-dashboard');
        }else if($user->user_role == 4) {
            return redirect('/po-dashboard');
        }else{
            //logout OR redirect to login page
        } 
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}

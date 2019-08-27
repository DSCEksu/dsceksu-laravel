<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * Check user's role and redirect user based on their role
     * @return
     */
    public function authenticated()
    {
      if(auth()->user()->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif(auth()->user()->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif (auth()->user()->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

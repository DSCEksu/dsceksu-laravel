<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Check user's role and redirect user based on their role after resetting password
     * @return
     */
    public function authenticated(){
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
        $this->middleware('guest');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Check user's role and redirect user based on their role after resetting password
     * @return
     */
    public function redirectTo() {
      if(auth()->user()->hasRole('lead')) {
        return '/lead/dashboard';
      } elseif(auth()->user()->hasRole('techcore')) {
        return '/techcore/dashboard';
      } elseif (auth()->user()->hasRole('nontechcore')) {
        return '/nontechcore/dashboard';
      } else {
        return '/member/dashboard';
      }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}

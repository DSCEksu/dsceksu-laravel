<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Role;
use Socialite;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OAuthController extends Controller
{
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleGoogleCallback()
  {
    $userSocial = Socialite::driver('google')->user();

    $findUser = User::where('email',$userSocial->email)->first();

    if($findUser) {
      Auth::login($findUser);

      if($findUser->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($findUser->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($findUser->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }else {
      $role = Role::where('name', 'member')->first();

      $user = new User;

      $user->name = $userSocial->name;
      $user->email = $userSocial->email;
      $user->password = bcrypt($userSocial->token);
      $user->image_upload = false;
      $user->image = $userSocial->avatar;
      $user->created_at = now();
      $user->updated_at = now();
      $user->save();

      $user->attachRole($role);

      Mail::to($user->email)->send(new WelcomeMail($user, $role));

      Auth::login($user);

      if($user->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($user->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($user->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }
  }

  public function redirectToGitHub()
  {
    return Socialite::driver('github')->redirect();
  }

  public function handleGitHubCallback()
  {
    $userSocial = Socialite::driver('github')->user();

    $findUser = User::where('email',$userSocial->email)->first();

    if($findUser) {
      Auth::login($findUser);

      if($findUser->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($findUser->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($findUser->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }else {
      $role = Role::where('name', 'member')->first();

      $user = new User;

      $user->name = $userSocial->name;
      $user->email = $userSocial->email;
      $user->password = bcrypt($userSocial->token);
      $user->image_upload = false;
      $user->image = $userSocial->avatar;
      $user->created_at = now();
      $user->updated_at = now();
      $user->save();

      $user->attachRole($role);

      Mail::to($user->email)->send(new WelcomeMail($user, $role));

      Auth::login($user);

      if($user->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($user->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($user->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }
  }

  public function redirectToFacebook()
  {
    return Socialite::driver('facebook')->redirect();
  }

  public function handleFacebookCallback()
  {
    $userSocial = Socialite::driver('facebook')->user();

    $findUser = User::where('email',$userSocial->email)->first();

    if($findUser) {
      Auth::login($findUser);

      if($findUser->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($findUser->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($findUser->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }else {
      $role = Role::where('name', 'member')->first();

      $user = new User;

      $user->name = $userSocial->name;
      $user->email = $userSocial->email;
      $user->password = bcrypt($userSocial->token);
      $user->image_upload = false;
      $user->image = $userSocial->avatar;
      $user->created_at = now();
      $user->updated_at = now();
      $user->save();

      $user->attachRole($role);

      Mail::to($user->email)->send(new WelcomeMail($user, $role));

      Auth::login($user);

      if($user->hasRole('lead')) {
        return redirect('/lead/dashboard');
      } elseif($user->hasRole('techcore')) {
        return redirect('/techcore/dashboard');
      } elseif ($user->hasRole('nontechcore')) {
        return redirect('/nontechcore/dashboard');
      } else {
        return redirect('/member/dashboard');
      }
    }
  }
}

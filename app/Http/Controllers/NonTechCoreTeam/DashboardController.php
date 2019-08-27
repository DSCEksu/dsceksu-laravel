<?php

namespace App\Http\Controllers\NonTechCoreTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function dashboard()
  {
    return view('backend.nontechcore.dashboard');
  }
}

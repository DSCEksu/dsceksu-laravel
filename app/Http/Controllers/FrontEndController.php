<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
  public function index()
  {
    return view('frontend.welcome');
  }

  public function learn()
  {
    return view('frontend.learn');
  }

  public function projects()
  {
    return view('frontend.projects');
  }
}

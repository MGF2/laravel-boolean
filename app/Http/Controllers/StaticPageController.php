<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home() {
      return view('home');
    }

    public function chiSiamo() {
      return view('chisiamo');
    }
}

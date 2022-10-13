<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function getWeb(){
      return view('website.home');
    }
}

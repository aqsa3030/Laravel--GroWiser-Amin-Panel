<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home_nav(){
    return view("adminPanel.admin");
}
}

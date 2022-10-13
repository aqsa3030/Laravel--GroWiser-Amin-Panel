<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;


class UserController extends Controller
{
    public function manageUsers(){

      return view('users.user');
    }

    public function getViewUsers(){

     $collection = Http::get('http://localhost:8000/api/viewUsers');
      return view('users.user', ['collection'=> $collection['users']]);
    }


}

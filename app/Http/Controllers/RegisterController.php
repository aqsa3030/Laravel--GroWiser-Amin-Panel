<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  //register
  public function register(){

      return view('login.login2');

  }

  //call register API
  public function registerApi(Request $request){

    $validator = Validator::make($request->all(),[

       'name'            =>'required|min:3|max:100',
       'email'           =>'required|email|unique:users',
       'password'        =>'required|min:6|max:100',
       'confirm_password'=>'required|same:password',
  ]);


  if($validator->fails()) {
      return redirect()->back()->withErrors($validator);
  }

  else{
  try{
          $http = new \GuzzleHttp\Client;
          $name= $request->name;
          $email= $request->email;
          $password=$request->password;

          $response =  $http->post('http://localhost:8000/api/registeration',[
            'headers'=>[
              'Authorization'=>'Bearer'.session()->get('token.access_token')
            ],
            'query'=>[

              'name'=>$name,
              'email'=>$email,
              'password'=>$password,
              'confirm_password'=>$password,
            ]
          ]);
            $result = json_decode((string)$response->getBody(),true);
            return view('adminPanel.admin');


            }

            catch(\Exception $e){
                return ( 'error Registration fails, please try again');
  }
}


  }
}

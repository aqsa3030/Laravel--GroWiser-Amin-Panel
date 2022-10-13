<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{


public function noOfUsers(){

return view('users');
}
public function getApi(){

    return view('adminPanel.admin');

}


public function admin()
{
return view('adminPanel.admin');
}


public function loginApi(Request $request){
  $messages = [
             "email.required" => "Email is required",
             "email.email" => "Email is not valid",
             "email.exists" => "Email doesn't exists",
             "password.required" => "Password is required",
             "password.min" => "Password must be at least 6 characters"
         ];

         // validate the form data
         $validator = Validator::make($request->all(), [
                 'email' => 'required|email|exists:users,email',
                 'password' => 'required|min:6'
             ], $messages);

         if ($validator->fails()) {
             return back()->withErrors($validator)->withInput();
         } else {
  try{
    $http = new \GuzzleHttp\Client;

    $email= $request->email;
    $password=$request->password;

    $response =  $http->post('http://localhost:8000/api/login1',[
      'headers'=>[
        'Authorization'=>'Bearer'.session()->get('token.access_token')
      ],
      'query'=>[
        'email'=>$email,
        'password'=>$password
      ]

    ]);

    $result = json_decode((string)$response->getBody(),true);
    return view('adminPanel.admin');
  }
  catch(\Exception $e){
    return ( 'error Login fails, please try again');

  }
}

}

public function login(){
return view('login.login2');
}
public function login2(){
return view('login.login2');
}


public function getforgotPasswordView(){
  return view('login.forgotPassword');
}

public function getForgotPassword(Request $request){

  $validator = Validator::make($request->all(), [
          'email' => 'required|email|exists:users,email',
      ]);
               if ($validator->fails()) {
                   return back()->withErrors($validator)->withInput();
               } else {

      $http = new \GuzzleHttp\Client;
      $email= $request->email;

      $response =  $http->post('http://localhost:8000/api/forget_password', [
                'headers'=>[
                  'Authorization'=>'Bearer'.session()->get('token.access_token')
                ],
                'query'=>[
                'email'=>$email
                ]
              ]);
      $result = json_decode((string)$response->getBody(),true);
              return view('login.login1')->with('success','Please check your mail to reset your password');
            }
    }



}

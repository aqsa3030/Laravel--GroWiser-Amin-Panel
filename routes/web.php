<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\PlantController;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\NurseryController;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\webController;



Route::get('/admin', [AdminController::class,'index']);

//redirect to index2 blade get_included_files
Route::get('/plant', [PlantController::class,'plantOperation']);


//redirection route for user management page
Route::get('/userinfo', [UserController::class,'manageUsers']);

//redirect route for nurseries
Route::get('/nurseries', [NurseryController::class,'manageNurseries']);

//register route
Route::get('/register', [RegisterController::class,'register']);
Route::post('/registerApi', [RegisterController::class,'registerApi'])->name('registerApi');

//login Route
Route::get('/getApi', [LoginController::class,'getApi']);
Route::post('/loginApi', [LoginController::class,'loginApi'])->name('loginApi');



Route::get('/login', [LoginController::class,'login']);
Route::get('/login2', [LoginController::class,'login2']);


Route::get('/insertPlant', [PlantController::class,'insertPlant']);
// call plant insertion API
Route::post('/getInsertApi', [PlantController::class,'getInsertApi'])->name('getInsertApi');
//call Plant view Api
Route::get('/viewPlant', [PlantController::class,'getViewApi'])->name('plant.index');



//update front end call
Route::get('/updatePlant', [PlantController::class,'updatePlant']);
//update by id API call
// this is the route?
//no

//which route API route?
Route::get('updateById/{id}',[PlantController::class,'updateById']);


//view by id API frontend call
Route::get('/viewById', [PlantController::class,'viewById']);
// view by id API call
Route::get('/getViewByIdApi/{id}', [PlantController::class,'getViewByIdApi'])->name('getViewByIdApi');

Route::get('/viewUsers', [UserController::class,'getViewUsers']);

Route::get('/delete/{id}', [PlantController::class,'getDeleteApi']);
Route::post('/checkStatus', [NurseryController::class,'checkStatus']);
Route::get('/test', [TestController::class,'test']);

Route::post('/getUpdateApi/{id}', [PlantController::class,'getUpdateApi'])->name('getUpdateApi');
Route::get('/growiser', [webController::class,'getWeb']);
//forgot password  Route
Route::get('/forgotPassword', [LoginController::class,'getforgotPasswordView']);
Route::post('/forgotPassword', [LoginController::class,'getForgotPassword'])->name('getForgotPassword');
Route::get('/deletePop', [PlantController::class,'popUp']);
Route::get('/home', [HomeController::class,'home_nav']);






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

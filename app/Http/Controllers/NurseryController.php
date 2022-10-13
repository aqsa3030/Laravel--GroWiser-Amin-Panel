<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\Available;
use App\Models\Plant;

class NurseryController extends Controller
{
  public function manageNurseries(){
      $collection= Plant::all();
      return view('nurseries.viewNursery')->with('collection', $collection);

  }


  public function checkStatus(Request $request){
    $plant_id=$request->plant_id;
    $plant_available=$request->plant_available;
     $availables = new Available();
     $availables->plant_id=$plant_id;
      $availables->plant_available=$plant_available;
      $availables->save();
      return view('adminPanel.admin');
  }

}

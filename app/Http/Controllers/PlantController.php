<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;



class PlantController extends Controller
{
    public function insertPlant(){

      return view('adminPlants.index');

    }


    public function plantOperation(){

      return view('adminPlants.index2');

    }

/*public function getViewApi(){
    $http = new \GuzzleHttp\Client;
    $response =  $http->get('http://localhost:9000/api/view',[
          ]);
          $result = json_decode((string)$response->getBody(),true);
            return view('adminPlants.index');
}*/





public function getInsertApi(Request $request){
    dd($request->all());
        // try{
        $http = new \GuzzleHttp\Client();
        //$client = new Client();
   
          // this is the wrong way using guzzle.
          // http://localhost:8000/api/insert 
          // use the above url in your form like url('http://localhost:8000/api/insert')
            // and hit that api .... and once you API is receving the response then you validate it accordingly.
            // 
              $response =   $http ->post('http://localhost:8000/api/insert', [
            'headers'=>[
              'Authorization'=>'Bearer'.session()->get('token.access_token'),
             
            ],

            'query'=>[
            'common_name'=>$request->common_name,
            'botanical_name'=>$request->botanical_name,
            'plant_description'=>$request->plant_description,
            'temperature'=>$request->temperature,
            'max_temperature'=>$request->max_temperature,
            'humidity'=>$request->humidity,
            'max_humidity'=>$request->max_humidity,
            'soil_ph'=>$request->soil_ph,
            'max_soil_ph'=>$request->max_soil_ph,
            'min_light'=>$request->min_light,
            'max_light'=>$request->max_light,
            'nitrogen'=>$request->nitrogen,
            'potassium'=>$request->potassium,
            'phosphorus'=>$request->phosphorus,
            'plant_type'=>$request->plant_type,
            'plant_image'=>$request->plant_image,
            ],
          ]);

          return $response;
        

          $result = json_decode((string)$response->getBody(),true);
          return view('adminPlants.index');
            

 //}
//              catch(\Exception $e){

//               return $e;
              
//  }
      }

public function getViewApi(){

  // $http = new \GuzzleHttp\Client;
  //$response =  $http->get('http://localhost:9000/api/view');
  //return view('adminPlants.viewPlant', ['response'=> $response]);

  // wrong way...
  $collection = Http::get('http://localhost:8000/api/view');
   // dd(file_get_contents('/webprojct/api/api/public/plantPhotos/1660586894.jpg'));
        return view('adminPlants.viewPlant', ['collection'=> $collection['plants']]);

}



public function getUpdateApi(Request $request, $id){
  $response= Http::post('http://localhost:8000/api/update/'.$id, [
              'headers'=>[
                'Authorization'=>'Bearer'.session()->get('token.access_token')
              ],
              'query'=>[
              'common_name'=>$request->common_name,
              'botanical_name'=>$request->botanical_name,
              'plant_description'=>$request->plant_description,
              'temperature'=>$request->temperature,
              'max_temperature'=>$request->max_temperature,
              'humidity'=>$request->humidity,
              'max_humidity'=>$request->max_humidity,
              'soil_ph'=>$request->soil_ph,
              'max_soil_ph'=>$request->max_soil_ph,
              'min_light'=>$request->min_light,
              'max_light'=>$request->max_light,
              'nitrogen'=>$request->nitrogen,
              'potassium'=>$request->potassium,
              'phosphorus'=>$request->phosphorus,
              'plant_type'=>$request->plant_type,
              'plant_image'=>$request->plant_image,
              ]
            ]);
             $result = json_decode((string)$response->getBody(),true);
            return view('adminPanel.admin');
        }


public function viewById(){
return view('adminPlants.viewById');
}

public function getViewByIdApi($id){
      $collection = Http::get('http://localhost:8000/api/view/viewById/'.$id);
     
      return view('adminPlants.viewById',['collection'=> $collection["plants"]]);
}

public function updateById($id){

  $collection = Http::get('http://localhost:8000/api/view/viewById/'.$id);
  return view('adminPlants.updatePlant',['collection'=> $collection['plants'  ]]);

}
public function getDeleteApi($id){
  $collection = Http::delete('http://localhost:8000/api/delete/'.$id);
  // $data = $collection->json();
  if($collection->status() == 200) {
    return redirect()->route('plant.index');
  }
}



public function popUp()
{
  return view("adminPlants.delete");

}
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
<style>

.register{
    background: -webkit-linear-gradient(left, #043927, #48A14D);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding-left: 10%;
    padding-right: 10%;
    padding-bottom: 4%;

    margin-top: 10%;
}
.btnRegister{
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #043927;
    color: #fff;
    font-weight: 600;
    width: 70%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
</head>

<body>
 



<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Tea_plant.png" alt=""/>
                        <h3>Update Plant</h3>
                        <p>Write all plant Information in a given form!</p>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">

                        

                      <form id="update_form"  method="post" enctype="multipart/form-data">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                          @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden"  class="form-control" name="id" placeholder="id" value="{{$collection['id']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="common_name" placeholder="Common Name" value="{{$collection['common_name']}}" />
                                        </div>


                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="plant_description" placeholder="Plant Description" value="{{$collection['plant_description']}}">{{$collection['plant_description']}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="temperature" placeholder="Temperature" value="{{$collection['temperature']}}" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_temperature" placeholder="Maximum Temperature" value="{{$collection['max_temperature']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="soil_ph" placeholder="Minimum Soil Ph" value="{{$collection['soil_ph']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_soil_ph" placeholder="Maximum Soil Ph" value="{{$collection['max_soil_ph']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="potassium"  placeholder="Potassium	" value="{{$collection['potassium']}}" />
                                        </div>

                                        <div class="form-group" >
                                            <div>
                                                <img src="{{('http://localhost:8000/plantPhotos/')}}/{{$collection['plant_image']}}" style="width:150px" />  </td>
                                            
                                            </div>
                                            <div>
                                                <strong> "{{$collection['common_name']}}"</strong>
                                            </div>
                                            <label>Update Plant Image:</label>
                                            <input type="file" name="plant_image" >
                                          </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="botanical_name" placeholder="Biological Name" value="{{$collection['botanical_name']}}" />
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="humidity" placeholder="Minimum Humidity" value="{{$collection['humidity']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_humidity" placeholder="Maximum Humidity" value="{{$collection['max_humidity']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="min_light" placeholder="Minimum Light" value="{{$collection['min_light']}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_light" placeholder="Maximum Light" value="{{$collection['max_light']}}" />
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="nitrogen" placeholder="Nitrogen" value="{{$collection['nitrogen']}}" />
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="phosphorus" placeholder="Phosphorus" value="{{$collection['phosphorus']}}" />
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="plant_type" placeholder="Plant Type" value="{{$collection['plant_type']}}" />

                                        </div>

                                        <input type="submit" class="btnRegister"  value="Update Plant"  />

                                    </div>
                                </div>
                              </form>
                            </div>

                        </div>
                    </div>
                       
</body>
</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

// never call any event trigger in document ready function  make it seprate

$("#update_form").submit(function(e) {
    e.preventDefault();

    let id = $("input[name=id]").val();

     $.ajax({
        url:"http://localhost:8000/api/update/"+id,
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data) {
           
            console.log(data);
            alert(data.msg);
        },
        error:function(e) {
            console.log(e)
        }
    });
})


// $(document).ready(function(){

// $('#update_form').on('submit', function(event){
//  event.preventDefault();
//  var id = $(this).data("id");
//  $.ajax({
//   url:"http://localhost:8000/api/update/"+id,
//   method:"POST",
//   data:new FormData(this),
//   dataType:'JSON',
//   contentType: false,
//   cache: false,
//   processData: false,
//   success:function(data)
//   {
//     alert("hello");
//     console.log(data);
//     alert(data.meg);
//   }
//  })
// });

// });
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
<!------- Include the above in your HEAD tag ---------->

<div class="container register" >
  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
  @endif
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Tea_plant.png" alt=""/>
                        <h3>Add New Plant</h3>
                        <p>Write all plant Information in a given form!</p>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">


                      <form id="upload_form"  method="post" enctype="multipart/form-data">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                          @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="common_name" placeholder="Common Name" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="plant_description" placeholder="Plant Description" value="" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="temperature" placeholder=" Minimum Temperature" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_temperature" placeholder="Maximum Temperature" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="soil_ph" placeholder="Min Soil Ph" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_soil_ph" placeholder="Max Soil Ph" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="min_light" placeholder="Minimum Light" value="" required/>
                                        </div>


                                        <div class="form-group">
                                          <label>Select Image File:</label>
                                          <input type="file" name="plant_image" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="botanical_name" placeholder="Biological Name" value="" required/>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="humidity"  placeholder=" Minimum Humidity" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_humidity" placeholder="Maximum Humidity" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="max_light" placeholder="Maximum Light" value="" required/>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="nitrogen"   placeholder="Nitrogen" value="" required/>
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="phosphorus"   placeholder="Phosphorus" value="" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="potassium" placeholder="Potassium	" value="" required/>
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="plant_type"   placeholder="Plant Type" value="" required/>
                                        </div>


                                        <input type="submit" class="btnRegister"  value="Add Plant" onclick="window.location='{{ url('/insertPlant')}}'"/>

                                    </div>
                                </div>
                              </form>
                            </div>

                        </div>
                    </div>
{{-- <script>


    // fetch('http://localhost:8000/api/view')
    // .then(response => response.json())
    // .then(res => console.log(res ,'res'))
    // .catch(err => console.log(err , 'err'))



// const data = { username: 'example' };
// fetch('https://example.com/profile', {
//   method: 'POST', // or 'PUT'
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify(data),
// })
//   .then((response) => response.json())
//   .then((data) => {
//     console.log('Success:', data);
//   })
//   .catch((error) => {
//     console.error('Error:', error);
//   });
</script> --}}

{{-- <script>

    
    fetch('http://localhost:8000/api/view')
    .then(response => response.json())
    .then(res => console.log(res ,'res'))
    .catch(err => console.log(err , 'err'))
    </script> --}}
    <script>
    $(document).ready(function(){

$('#upload_form').on('submit', function(event){
 event.preventDefault();
 $.ajax({
  url:"http://localhost:8000/api/insert",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(data)
  {
   // $(".successMessage").delay(5000).fadeOut('slow');

    console.log("data",data)
    alert(data.message)
    
    //docum
//    $('#message').css('display', 'block');
//    $('#message').html(data.message);
  

   
  
  }
 })
});

});

    
// const data = { username: 'example' };
// fetch('https://example.com/profile', {
//   method: 'POST', // or 'PUT'
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify(data),   
// })
//   .then((response) => response.json())
//   .then((data) => {
//     console.log('Success:', data);
//   })
//   .catch((error) => {
//     console.error('Error:', error);
//   });
</script>
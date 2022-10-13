
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
background: url('images/plant2.jpg.avif');


}
.main{
	width: 350px;
	height: 400px;
	background-color: #eee;
	overflow: hidden;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;

}
#chk{
	display: none;
}
.login{

	width: 350px;
	height: 500px;
background-color:  #eee;
	position: relative;
	width:100%;
}
label{
color:#2E8B57;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
  margin-bottom: 0px;
	font-weight: bold;
	cursor: pointer;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background:#355E3B;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #478778;
  background-image: url();
}


.error-message {
  color: #cc0033;
  display: inline-block;
  font-size: 12px;
  line-height: 15px;
  margin: 5px 0 0;
}

</style>
<body>


	
				 

	   
		</div>
		

	
	    <div class="alert alert-danger" ></div>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

			
		<div class="alert alert-success">
			<div class="container register" >
				@if(session()->has('success'))
				<div class="alert alert-success">
				  {{ session()->get('success') }}
				</div>
				@endif
			<div class="login">


				<form action="{{route('loginApi')}}" method="post">
                    @csrf

					<label for="chk"  aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="" for="validationDefault04">
				
					<div  class="error-message"></div>
					

					<button>Login</button>


				</form>
			</div>
	</div>

</body>
</html>

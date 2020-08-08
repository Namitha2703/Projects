<!DOCTYPE html>
<html>
<title>Registration</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="admin\css\bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin\css\bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="admin\css\style1.css">
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="white">AKRITHI</font></h2>
    </li>
    </ul>
    </nav>
     <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("admin/images/colour.jpg");
  

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body ><!-- background="{{asset('admin/images/colour.jpg')}}">-->
<div class="bg">
<div align="center" >
<div class="row">
	<div class="container" col-md-10>
<div class="card" style="width:400px">
  <div class="card-body">
    <h5 class="card-title"><center>Register Here</center></h5>
    <p class="card-text">
<form method="post" action="/reg">
<input type="hidden" name="_token" value="{{csrf_token()}}">
					 <div class="input-group mb-3 input-group-lg">
					    <div class="input-group-prepend">
					      <span class="input-group-text"></span>
					    </div>
					    <input type="text" name="usn" class="form-control" placeholder="Username">
					  </div>
					  <div class="input-group mb-3 input-group-lg">
					    <div class="input-group-prepend">
					      <span class="input-group-text"></span>
					    </div>
					    <input type="text" name="email" class="form-control" placeholder="Email">
					  </div>
					  <div class="input-group mb-3 input-group-lg">
					    <div class="input-group-prepend">
					      <span class="input-group-text"></span>
					    </div>
					    <input type="password" name="pass" class="form-control" placeholder="Password">
					  </div>

					  <input type="submit" name="Register" class="btn btn-info btn-block btn-lg" value="Register">
				</form>

    </p>
  </div>
  </div>
  </div></div></div>
</center>
</div>
</body>
</html>


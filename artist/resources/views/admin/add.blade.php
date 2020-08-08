<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body background="{{asset('admin/images/add1.jpg')}}">
<center>
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">Add new ART</font></h2>
    </li>
    </ul>
    </nav>
    <div class="container">
<form method="post" action="/add1" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">ART path</span>
    </div>
    <input name="path" type="file" class="form-control" required="" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Name of the ART</span>
    </div>
    <input name="artname" type="text" class="form-control" placeholder="artname">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Type</span>
    </div>
    <input name="type" type="text" class="form-control" placeholder="type">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text">description</span>
    </div>
    <textarea name="description" rows="4" cols="250">description</textarea>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text">price</span>
    </div>
<textarea name="price"  rows="1" cols="250">price</textarea>
  </div>
  <input type="submit" class="btn btn-dark" value="Add">
</form>
</div>
  </center>
</body>
</html>
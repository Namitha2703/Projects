<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body background="{{asset('admin/images/login.jpeg')}}">
<center>
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">Add new recipe</font></h2>
    </li>
    </ul>
    </nav>
<form method="post" action="/add1" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Image path</span>
    </div>
    <input name="path" type="file" class="form-control" required="" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Name of the recipe</span>
    </div>
    <input name="title" type="text" class="form-control" placeholder="recipe">
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Type</span>
    </div>
    <input name="type" type="text" class="form-control" placeholder="type">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text">list of the ingredients</span>
    </div>
    <textarea name="ingredients" rows="4" cols="250">ingredients</textarea>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text">prepation procedure</span>
    </div>
<textarea name="preparation"  rows="4" cols="250">procedure</textarea>
  </div>
  <input type="submit" class="btn btn-dark" value="Add"</script>">
</form>
  </center>
</body>
</html>
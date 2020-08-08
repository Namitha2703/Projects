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

<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">recipes</font></h2>
    </li>
    </ul>
    </nav>

<table class="table table-bordered table-dark">
  <tr>
  <th>image</th>
  <th>name</th>
    <th>Type</th>
    <th>ingredients</th>
    <th>preparation</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($res as $rec)
  <tr>
  <th><img src="{{ asset('admin/images/'.$rec->images)}}" width="250" height="250"></th>
  <th>{{$rec->nameor}}</th>
  <th>{{$rec->type}}</th>
  <th>{{$rec->ingredients}}</th>
  <th>{{$rec->preparation}}</th>
  <th><a href="/editrec/{{$rec->rid}}" class="btn btn-info">Edit</a></th>
   <th> <a href="/delrec/{{$rec->rid}}" class="btn btn-danger">Delete</a></th>
    </tr>
    @endforeach
 
</table>
</body>
</html>
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

<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">ARTS</font></h2>
    </li>
    </ul>
    </nav>

<table class="table table-bordered table-dark">
  <tr>
  <th>image</th>
  <th>name</th>
    <th>Type</th>
    <th>description</th>
    <th>price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($res as $rec)
  <tr>
  <th><img src="{{ asset('admin/images/'.$rec->images)}}" width="250" height="250"></th>
  <th>{{$rec->artname}}</th>
  <th>{{$rec->type}}</th>
  <th>{{$rec->description}}</th>
  <th>{{$rec->price}}</th>
  <th><a href="/editrec/{{$rec->aid}}" class="btn btn-info">Edit</a></th>
   <th> <a href="/delrec/{{$rec->aid}}" class="btn btn-danger">Delete</a></th>
    </tr>
    @endforeach
 
</table>
</body>
</html>
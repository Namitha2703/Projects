<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylee.css')}}">
	<title></title>
</head>
<body>
@foreach($res as $rec)

<center>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <h1>{{$rec->nameor}} </h1>
    </li>
  </ul>
</nav>
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <h2><font color="grey">{{$rec->type }}</font>
</h2>
    </li>
  </ul>
</nav>
</center>
@endforeach

<div class="row">
	@foreach($res as $rec)
	<div class="col-md-10" style="margin-left: 10%;">
		<div class="card">
			 <div class="card-body">
			 	<h4>
			 	<font color="black"><u><b>Ingredients</b></u></font><br>
<font color="black">{!!nl2br(e($rec->ingredients))!!}</font>
</h4>
<h4>
<font color="black"><u><b>Preparation</b></u></font><br>
<font color="black">{!!nl2br(e($rec->preparation))!!}
</font>
</h4>
			 </div>
		</div>
	</div>
	@endforeach
</div>
</body>
</html>
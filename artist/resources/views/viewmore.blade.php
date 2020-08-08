<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylee.css')}}">
	<title></title>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
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
      <h2><font color="white">{{$rec->type }}</font>
</h2>
    </li>
  </ul>
</nav>
</center>
<!-- First Photo Grid-->
<div class="container">
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  @foreach($res as $items)
    <div class="w3-half recipe-box">
<img src="{{ asset('admin/images/'.$items->images) }}" alt="{{$items->nameor}} " style="width:100%" style="height:100%">
      <h3>{{ $items->nameor }}</h3>
    </div>
    @endforeach
    </div>
    </div>
@endforeach

<div class="row">
	@foreach($res as $rec)
	<div class="col-md-10" style="margin-left: 10%;">
		<div class="card">
			 <div class="card-body">
			 	<h4>
			 	<font color="black"><u><b>Description</b></u></font><br>
<font color="black">{!!nl2br(e($rec->description))!!}</font>
</h4>
<h4>
<font color="black"><u><b>Price</b></u></font><br>
<font color="black">{!!nl2br(e($rec->price))!!}
</font>
</h4>
			 </div>
		</div>
	</div>
	@endforeach
</div>
<footer>
	<center><i>To buy contact us<br> Phone: +91 9876543210,<br> Email: wepaint@gmail.com</i> </center>
</footer>
</body>
</html>
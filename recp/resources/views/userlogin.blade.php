<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>user recipe</title>
</head>
<body>
<center>
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">Recipes</font></h2>
    </li>
    </ul>
    </nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/images/chicken.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/re.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/mango.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/naan.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</center>
<div class="container">
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
    	VIEW YOUR RECIPES
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
         <div class="container">
    <a href="/food1" class="btn" role="button">starters</a>
      <a href="/food2" class="btn btn-success" role="button">main-course</a>
  <a href="/food3" class="btn btn-danger" role="button">south-indian</a>
  <a href="/food4" class="btn btn-warning" role="button">North-indian</a>
    <a href="/food5" class="btn btn-dark" role="button">desserts and juices</a>   
</div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
   </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p>Authors:<br>
    Chayashree,Disha,Shubha,Namitha,Kavya<br>#PeoplePassionateAboutCooking.<br>Please drop the requests for more recipes in the home page.</p>
  </div>
</div>
</body>
</html>
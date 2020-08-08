

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>admin page</title>
</head>
<body>
<center>
<nav class="navbar navbar-expand-sm bg-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
<h2><font color="grey">Time to Add new Recipe</font></h2>
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
      <img src="admin/images/juices.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/eggcurry.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/paneer.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="admin/images/gobi.jpg" alt="New York" width="1100" height="500">
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
        <a class="card-link">
          <a href="/add" class="btn" role="button">Add</a>
        </a>
      </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link">
    <a href="/viewrecipe" class="btn" role="button">view</a>
      </a>
      </div>
      </div>
      </div>
      </div>
      </div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p>Authors<br>
    Chayashree,Disha,Shubha,Namitha,Kavya</p>
  </div>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CustomerHomePage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="font-awesome-4.7.0/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  		<div class="container">
  			<a class="navbar-brand">Welcome</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{route('customer.home')}}">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('customer.profile')}}">Profile</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Money Transaction
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{route('customer.send.customer')}}">Send Money</a>
		          <a class="dropdown-item" href="{{route('customer.cash.out')}}">Cashout</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Payment
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="{{route('customer.pay.bill')}}">Bill</a>
		          <a class="dropdown-item" href="{{route('customer.tax.payment')}}">Tax</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('notice')}}">Notice</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{route('customer.transaction.history')}}">History</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
		      </li>
		    <!--<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>-->
		  </div>
  		</div>
	</nav>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<h5>Online Money Transaction</h5>
      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.</p>
      	<p><a href="#">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<h5>Online Money Transaction</h5>
      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.</p>
      	<p><a href="#">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<h5>Online Money Transaction</h5>
      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua.</p>
      	<p><a href="#">More Info</a></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

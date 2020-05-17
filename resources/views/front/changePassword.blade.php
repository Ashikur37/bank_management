<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Change Password</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel = "stylesheet" href="EditAdminInfo.css">
		<link href="assets/css/animate.min.css" rel="stylesheet"/>
		<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
		<link href="font-awesome.css" rel="stylesheet">
		<link href="font-family.css" rel='stylesheet'>
		<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<script src="jquery-2.2.3.min.js"></script>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script src="assets/js/chartist.min.js"></script>

	</head>
	<body>
		<div>
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">

					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="{{route('customer.home')}}"> Home</a>
							</li>
							<li>
								<a href="{{route('signout')}}">
									Log out
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>


<div class="container">
			<img src="man.png">
			<h2>Change your password</h2>
			<form action="{{route('update.password')}}" method="post">
            @csrf
				<div>
				    <input type="password" name="prePassword" id="prePassword" placeholder="Enter previous password">
					<br>
					<input type="password" name="newPassword" id="newPassword" placeholder="Enter a new password">
					<br>
					<input type="password" name="conPassword" id="conPassword" placeholder="Re-enter the password">

				</br>
  @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach

				<p id="crd"></p>
				<input type="submit"  value="Submit" class="btn-edit" >
				<br/>
			</form>
		</div>
	</div>



	</body>
	</html>

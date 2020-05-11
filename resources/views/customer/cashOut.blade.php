<!doctype html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Customer Profile</title>
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
		<div class="sidebar" data-color="green" data-image="assets/img/money.jpg">

			<div class="sidebar-wrapper">
				<div class="logo">
					<p>Receive your Money</p>
					<br/>

				</div>
				<p>1.1500 BDT has sent from Transaction Id: 172631 and your pin is 1234</p>
			</div>



		</div>
		<div>
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="login.html">
									Log out
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

<div class="container">

			<form action="cashoutByCustomer.html" method="post">
				<div>
					<br><br>
				    <br><br><br><br>

					<br>
					<input type="text" name="username" id="uname" placeholder="Enter Transaction Id">
					<br>
					<input type="password" name="email" id="email" placeholder="Enter Pin">
					<br>
				</br>
				<p id="crd"></p>
				<input type="submit"  value="Receive" class="btn-edit" >
				<br/>
			</form>
		</div>
	</div>
</body>
</html>

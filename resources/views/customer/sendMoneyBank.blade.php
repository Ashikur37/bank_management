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
					<p>Sending Money to...</p>
					<br/>

				</div>

			<ul class="nav">
					<li class="nav-item ">
		        		<a class="nav-link" href="{{route('customer.send.agent')}}">Agent</a>
		      		</li>
		     		<li class="nav-item active">
		        		<a class="nav-link" href="{{route('customer.send.bank')}}">Bank Account</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="{{route('customer.send.mobile')}}">Mobile Number</a>
		      		</li>
				</ul>

			</div>

		</div>
		<div>
			<ul class="nav">
					<li class="nav-item ">
		        		<a class="nav-link" href="{{route('customer.send.agent')}}">Agent</a>
		      		</li>
		     		<li class="nav-item active">
		        		<a class="nav-link" href="{{route('customer.send.bank')}}">Bank Account</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="{{route('customer.send.mobile')}}">Mobile Number</a>
		      		</li>
				</ul>
		</div>

		<div class="container">
			<h2>To Bank Account</h2>
			<form action="{{route('send-money-bank')}}" method="post">
            @csrf
				<div>
					<br><br>
				    <input type="text" name="amount" id="phone" placeholder="Enter Amount of Money">
					<br>
					<input type="text" name="bank_name" id="uname" placeholder="Enter Bank's Name">
					<br>
					<input type="text" name="bank_account" id="uname" placeholder="Enter Bank Account Number">
					<br>
					<input type="password" name="pin" id="email" placeholder="Enter Pin">
					<br>
                       @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
				</br>
				<p id="crd"></p>
				<input type="submit"  value="Send Money" class="btn-edit" >
				<br/>
			</form>
		</div>
	</div>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
	</title>
	<link rel = "stylesheet" href="cssLogin.css">
	<link rel = "stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<img src="man.png">
		<form method="POST" action="{{ route('login') }}">
        @csrf
			<div class="form-input">
				<input type="text" id="un" name="email" value="{{ old('email') }}">
			</div>
			<div class="form-input">
				<input type="password" id="pass" name="password" placeholder="Enter Password">
			</div>
			</br><br>
			<input type="submit" value="LOGIN" class="btn-login" >
			<br/>
			<p id="crd"></p>
		</form>
	</div>
</body>
</html>


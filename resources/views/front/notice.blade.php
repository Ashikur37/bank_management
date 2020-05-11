<!DOCTYPE html>
<html>
<head>
	<title>Notice board</title>
	<style>
		html{
			background:url('images/pic.webp') no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size:cover;
			-o-background-size:cover;
			background-size:cover;
		}
		*{
			margin: 0px;
			padding: 0px;
		}
		.content{
			width: 300px;
			margin: 20px auto;
			box-shadow: 1px 1px 10px 2px #333;
			border-radius: 5px;
			overflow: hidden;
		}
		.header{
			background:brown;
			color: white;
			padding: 15px 0px;
		}
		.moving-body{
			padding: 4px;
			height: 300px;
		}
		.m-par{
			text-align: center;
			padding: 4px;
		}
	</style>
</head>
<body>
	<br><br><br><br>
	<div class="content">
		<h1 class="header" align="center">Notifications </h1>
		<marquee behavior="scroll" direction="up" scrollamount="1" onmouseover="this.setAttribute('scrollamount',0,0);this.stop(); onmouseout="this.setAttribute('scrollamount',2,0);this.start();" class="moving-body">
			<script>
					document.write('<p class="m-par"><b>There will be no transaction on this Saturday.</b></p>')
			</script>
		</marquee>
	</div>
</body>
</html>

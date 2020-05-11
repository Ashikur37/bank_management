
	<!doctype html>
	<html lang="en">
	<head>
		<style>
			table
			{
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width:60%;
			}

			table,td, th
			{
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even)
			{
				background-color: #dddddd;
			}
		</style>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project</title>
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
								<a href="customerHome.html"> Home</a>
							</li>
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

		<div>
			<h3 align="center">Customer Transactions</h3>
			<form action="#" method="post"  name="form">
			<div align="center" style="overflow-x:auto;">

				<table>
				<tr>
					<td>
					<td><b>Tid</b></td>
					<td><b>Transactor name</b></td>
					<td><b>Transactor phone</b></td>
					<td><b>Transactor mail</b></td>
					<td><b>Transaction Type</b></td>
					<td><b>Transacted to</b></td>
					<td><b>Amount</b></td>
					<td><b>Reciever Type</b></td>


					</tr>

					<tr>
					<td><input name="checkbox[]" type="checkbox"></td>
					<td><b>1</b></td>
					<td><b>sayed safin</b></td>
					<td><b>01254894455</b></td>
					<td><b>safin@gmail.com</b></td>
					<td><b>send money</b></td>
					<td><b>01548956587</b></td>
					<td><b>1000TK</b></td>
					<td><b>Tax</b></td>

					</tr>

					<tr>
					<td><input name="checkbox[]" type="checkbox"></td>
					<td><b>2</b></td>
					<td><b>sayed safin</b></td>
					<td><b>01254894455</b></td>
					<td><b>safin@gmail.com</b></td>
					<td><b>receive money</b></td>
					<td><b>01548956587</b></td>
					<td><b>1000TK</b></td>
					<td><b>Bank</b></td>

					</tr>


					<tr>
					<td><input name="checkbox[]" type="checkbox"></td>
					<td><b>3</b></td>
					<td><b>sayed safin</b></td>
					<td><b>01254894455</b></td>
					<td><b>safin@gmail.com</b></td>
					<td><b>tax</b></td>
					<td><b>01548956587</b></td>
					<td><b>1000TK</b></td>
					<td><b>Admin</b></td>

					</tr>



				<tr>
					<td><input name="checkbox[]" type="checkbox"></td>
					<td><b>4</b></td>
					<td><b>sayed safin</b></td>
					<td><b>01254894455</b></td>
					<td><b>safin@gmail.com</b></td>
					<td><b>send money</b></td>
					<td><b>01548956587</b></td>
					<td><b>1000TK</b></td>
					<td><b>Admin</b></td>

					</tr>




					<tr>
					<td><input name="checkbox[]" type="checkbox"></td>
					<td><b>5</b></td>
					<td><b>sayed safin</b></td>
					<td><b>01254894455</b></td>
					<td><b>safin@gmail.com</b></td>
					<td><b>bill payment</b></td>
					<td><b>01548956587</b></td>
					<td><b>1000TK</b></td>
					<td><b>Admin</b></td>


					</tr>
				</table>

			</div>
			<br/>
			<div style="padding-left:300px">
				<input type="submit" name="delete" value="Delete" class="btn-delete"><br/>
				<input type="submit" name="printList" value="Print" class="btn-delete"><br/>
				<p id="crd"></p>
			</div>
			</form>
		</div>

	</body>
	</html>

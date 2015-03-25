<?php 
	require_once('admin_nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
	  body {
			padding-top: 60px; 
		}
		input .form-group {
			border-radius: 50px;
		}
		th {
			height: 20px;
			width: 100px;
			border: collapse;
			border: 2px solid black;
		}
		.address {
			height: 20px;
			width: 200px;
		}
		.inner-addon {
			position: relative;
		}
		.inner-addon .glyphicon {
			position: absolute;
			padding: 10px;
		}
		.left-addon input {
			padding-left: 30px;
		}
		.font12{
			font-size: 18px;
		}
		a {
			padding: 0 5px 0 5px; 
		}
		table {
			margin: 5px 20px 5px 20px;
		}
		th {
			background-color: rgb(197, 193, 193);
		}
		tr:nth-child(odd) {
			background-color: rgb(216, 211, 211);
		}
	</style>
	<script type="text/javascript">
	
	</script>
</head>
<body>
 	<div class="container">
 		<div class="row features col-md-12">
 			<form class="form-inline">
	 				<div class="inner-addon left-addon form-group">
	  					<i class='glyphicon glyphicon-search'></i>
	  					<input type="text" class="form-control" placeholder="search">
	  				</div>
				    <select class="form-control pull-right">
					  <option value=''>Show All</option>
					  <option value='1'>Order in process</option>
					  <option value='2'>Shipped</option>
					  <option value='3'>Cancelled</option>
					</select>
				  </div>
			</form>
		</div>
 		<div class="row col-md-12">
	 		<table class="table table-striped table-bordered">
	 			<thead>
	 				<th>Order ID</th>
	 				<th>Name</th>
	 				<th>Date</th>
	 				<th class="address">Billing Address</th>
	 				<th>Total</th>
	 				<th>Status</th>
	 			</thead>	
				<!-- foreach($products as $product)
				{ -->
					<tr>
						<td><a href='show/2'>dgagd</a></td>
						<td>gadgaga</td>
						<td>gadgag</td>
						<td>gagd</td>
						<td>hhrhagae</td>
						<td>
							<form>
								<select class="form-control">
						  			<option value='1'>Order in process</option>
									<option value='2' selected>Shipped</option>
									<option value='3'>Cancelled</option>
								</select>
							</form>
						</td>
					</tr>
			<!-- } -->
			</table>
 		</div>
 		<div>
            <center class='font12'><a>1</a>|<a>2</a>|<a>3</a>|<a>4</a>|<a>5</a>|<a>6</a>|<a>7</a>|<a>></a><center>
        </div>
 	</div>
 
</body>
</html>

 <!-- <?php require_once('admin_nav.php'); ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
	  body {
			background-image: url('https://s3-us-west-2.amazonaws.com/bookrental/gray.png');
			background-repeat: repeat-y;
			background-size: cover;
			
		}
		.container {
			margin-top: 40px;
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
		a {
			padding: 0 5px 0 5px; 
		}
		table {
			margin: 5px 20px 5px 20px;
		}
		th {
			background-color: transparent;
			text-align: center;
			color: #737373;
		}
		tr:nth-child(odd) {
			background-color: transparent;
		}
		.nav {
			margin-bottom: 30px;
			color: #DDE0C3;
		}
		.row {
			margin-top: 40px;
		}
		#nav {
			border-bottom: 2px solid #DDE0C3;;
		}
	</style>
</head>
<body>
 	<div class="container">
 	<div class="col-xs-10" id="nav">
	 	<a class="nav navbar-nav pull-left"href="/admin/products/<?= $user?>">Go Back</a>
	 	<a class="nav navbar-nav pull-right" href="/admin/signin">Log off (your ID: <?=$user?>)</a>
 	</div>
 		<div class="row features col-xs-10">
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
 		<div class="row">
 			<div class="col-xs-10">
	 		<table class="table table-striped table-bordered">
	 			<thead>
	 				<th>Order ID</th>
	 				<th>Name</th>
	 				<th>Date</th>
	 				<th class="address">Billing Address</th>
	 				<th>Total</th>
	 				<th>Status</th>
	 			</thead>	
				<?php
				 // foreach($products as $product) 
				{?> 
					<tr>
						<td><a href='show/2'>1</a></td>
						<td>Uyanga</td>
						<td>07-06-2015</td>
						<td>544 Central Avenue, Alameda</td>
						<td>$5</td>
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
			<?php } ?>
			</table>
			</div>
			<div class="col-xs-2"></div>
 		</div>
 		<div>
            <!-- <center style='font-size: 18px'><a>1</a>|<a>2</a>|<a>3</a>|<a>4</a>|<a>5</a>|<a>6</a>|<a>7</a>|<a>></a><center> -->
        </div>
 	</div>
</body>
</html>
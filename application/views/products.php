<?php require_once('nav_bar.php'); ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<style rel='stylesheet'>
			.inner-addon {	position: relative; }	
			.inner-addon .glyphicon {	
				position: absolute;
				padding: 10px;
			}	
			.left-addon input {	
				padding-left: 30px;
			}
			a {padding: 0px 5px 0px 5px;}	
			.blue {
				background-color: blue;
				font-weight: bold;
				color: white;
			}
			.row {
				margin-top: 30px;
			}
			.font12{font-size: 18px;}
			.bottompad20{padding-bottom: 20px;}
		</style>
	</head>
	<body>
		<div class='row'>
			<div class='col-md-1'> </div>
			<div class='col-md-10'>
				<form class='form-inline'>
					<div class="row features col-md-12 bottompad20">						
						<div class="inner-addon left-addon form-group">
			  				<i class='glyphicon glyphicon-search'></i>
			  				<input type="text" class="form-control" placeholder="search">
			  			</div>
						<input class='form-control pull-right blue' type='button' name='newproduct' value='Add New Product'>
					</div>
				</form>
				<table class='table table-striped table-bordered'>
					<tr>
						<td>Pictures</td>
						<td>ID</td>
						<td>Name</td>
						<td>Inventory Count</td>
						<td>Quantity Sold</td>
						<td>Action</td>
					</tr>
					<form>
					<tr>
						<td></td>
						<td>1</td>
						<td>T-shirt</td>
						<td>20</td>
						<td>100</td>
						<td><a href='/admin/edit_product'>Edit</a> <a class='padding10' href=''>Delete</a></td>
					</tr>	
					<tr>
						<td></td>
						<td>2</td>
						<td>Coffee mugs</td>
						<td>10</td>
						<td>500</td>
						<td><a href='/admin/edit_product'>Edit</a> <a class='padding10' href=''>Delete</a></td>
					</tr>	
				</table>
				<div>
					<center class='font12'><a>1</a>|<a>2</a>|<a>3</a>|<a>4</a>|<a>5</a>|<a>6</a>|<a>7</a>|<a>></a><center>
				</div>
				</form>
			</div>
		</div>
	</body>
</html>
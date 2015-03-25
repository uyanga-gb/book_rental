<?php require_once('admin_nav.php'); ?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<style rel='stylesheet'>
			body{padding-top: 70px;}
			.bordered{
				border: 2px solid black;
				border-radius: 10px;
			}
			.paddingtop50{padding-top: 50px;}
			.green{
				background-color: green;
				padding: 5px 5px 5px 5px;
			}
		</style>
	</head>
	<body>
		<div class='container'>
			<div class='row'>
				<div class='col-md-3 bordered'> 
						<label>Order ID: 1</label><br><br>
						<label>Customer Shipping Info:</label><br>
						<label>Name:Bob</label><br>
						<label>Address: 123 Dojo Way</label><br>
						<label>City: Seattle</label><br>
						<label>State: WA</label><br>
						<label>Zip: 98133</label><br><br>
						<label>Customer Billing Info:</label><br>
						<label>Name: Bob</label><br>
						<label>Address: 123 Dojo Way</label><br>
						<label>City: Seattle</label><br>
						<label>State: WA</label><br>
						<label>Zip: 98133</label><br>
				</div>
				<div class='col-md-1'></div>
				<div class='col-md-7'>
					<table class='table table-striped table-bordered paddingtop50'>
						<thead>
							<td>ID</td>
							<td>Item</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Total</td>
						</thead>
						<tr>
							<td>I35</td>
							<td>cup</td>
							<td>$9.99</td>
							<td>1</td>
							<td>#9.99</td>
						</tr>
						<tr>
							<td>215</td>
							<td>shirt</td>
							<td>$19.99</td>
							<td>2</td>
							<td>#39.9</td>
						</tr>
					</table>
					<div class='col-md-11'>
						<div class='col-md-4 green bordered'>
							<label>Status:</label>
							<label>Shipped</label>
						</div>
						<div class='col-md-1'></div>
						<div class='col-md-6 bordered'>
						<label>Sub total:$ 29.98</label><br>
						<label>Shipping: $ 1.00</label><br>
						<label>Total Price:$30.98</label>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
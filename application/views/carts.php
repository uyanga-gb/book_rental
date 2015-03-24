<?php    require('nav_bar.php');    ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
	</script>
    <style>
    	table {
    		margin-top: 50px;
    	}
    	thead {
    		background-color: rgb(197, 193, 193);
    	}
    	.field {
    		width: 250px;
    	}
    	p {
    		text-align: right;
    		margin-left: 20px;
    	}
    	#card {
    		margin-left: 150px;
    	}
    </style>
</head>
<body>
	<div class="container">
		<form action="#" method="post">
			<table class="table table-bordered">
				<thead>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</thead>
				<tbody>
					<tr></tr>
					<td>Black Belt for Staff</td>
					<td>$19.99</td>
					<td>1 <a href="#">update</a><span class="glyphicon glyphicon-trash inner-addon right-addon" /></td>
					<td>$19.99</td>
					<tr></tr>
					<td>CodingDojo Cups</td>
					<td>$9.99</td>
					<td>3 <a href="#">update</a><span class="glyphicon glyphicon-trash inner-addon right-addon" /></td>
					<td>$29.97</td>
				</tbody>
			</table>
			<p class="pull-right">Total: $49.96</p><br><br>
			<input class="pull-right" type="submit" name="continue" value="Continue Shopping">
		</form>
	</div>
	<div class="container">
		<h1>Shipping Information</h1>
		<form action="#" method="post">
			<table>
				<td><p>First Name:</p></td>
				<td><input class="field" type="text" name="first_name"></td>
				<tr></tr>
				<td><p>Last Name:</p></td>
				<td><input class="field" type="text" name="last_name"></td>
				<tr></tr>
				<td><p>Address:</p></td>
				<td><input class="field" type="text" name="address"></td>
				<tr></tr>
				<td><p>Address 2:</p></td>
				<td><input class="field" type="text" name="address2"></td>
				<tr></tr>
				<td><p>City:</p></td>
				<td><input class="field" type="text" name="city"></td>
				<tr></tr>
				<td><p>State:</p></td>
				<td><input class="field" type="text" min="2" name="state"></td>
				<tr></tr>
				<td><p>Zipcode:</p></td>
				<td><input class="field" type="text" name="zip"></td>
			</table>
		</form>
		<h1>Billing Information</h1>
		<form action="#" method="post">
		<input type="checkbox" name="same_shipping"> Same as Shipping
			<table>
				<td><p>First Name:</p></td>
				<td><input class="field" type="text" name="first_name"></td>
				<tr></tr>
				<td><p>Last Name:</p></td>
				<td><input class="field" type="text" name="last_name"></td>
				<tr></tr>
				<td><p>Address:</p></td>
				<td><input class="field" type="text" name="address"></td>
				<tr></tr>
				<td><p>Address 2:</p></td>
				<td><input class="field" type="text" name="address2"></td>
				<tr></tr>
				<td><p>City:</p></td>
				<td><input class="field" type="text" name="city"></td>
				<tr></tr>
				<td><p>State:</p></td>
				<td><input class="field" type="text" min="2" name="state"></td>
				<tr></tr>
				<td><p>Zipcode:</p></td>
				<td><input class="field" type="text" name="zip"></td>
			</table>
			<br>
			<div id="card">
				<script
				src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
				data-amount="4996"
				data-name="Carts"
				data-description="4 widgets ($49.96)"
				data-image="http://cdn.mysitemyway.com/icons-watermarks/simple-black/bfa/bfa_credit-card/bfa_credit-card_simple-black_128x128.png">
				</script>
			</div>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
</body>
</html>

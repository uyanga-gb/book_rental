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
    body {
    	background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/grey3.jpg");
		background-repeat: no-repeat;
		background-size: cover;
    }
    .container {
    	margin-top: 100px;
    	
    }
    h1 {
    	color: #737373;
    }
    	table {
    		margin-top: 50px;
    	}
    	thead {
    		background-color: rgb(197, 193, 193);
    		color: #737373;
    	}
    	td {
    		color: #fff;
    	}
    	.field {
    		width: 250px;
    	}
    	p {
    		text-align: right;
    		margin-left: 20px;
    		color: #737373;
    		margin-right: 10px;
    	}
    	.glyphicon {
    		padding-left: 15px;
    		color: red;
    	}
    	.pull-right {
    		color: #fff;
    		font-weight: bold;
    		font-size: 18px;
    	}
    	#card {
    		margin-left: 150px;
    	}
    	.btn {
    		color: #DDE0C3;
    		background-color: transparent;
    		border-radius: 3px;
    		border-color: #fff;
    		margin-top: 30px;
    	}
    	input {
    		opacity: 0.5;
    		color: black;
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
				<?php	
				$total = 0;	
					foreach ($cart_items as $item)
						 {?>
							<tr>
								<td><?=$item['name']?></td>
								<td><?=$item['price']?></td>
								<td><?=$item['quantity']?> <a href="/products/remove/<?=$item['id']?>"><span class="glyphicon glyphicon-trash inner-addon right-addon" /></a></td>
								<td>$<?=$item['total']?></td>
								<?php $total += $item['total'];	?>
							</tr>
						<?php }	?>				
				</tbody>
			</table>
			<p class="pull-right">Total: $<?=$total?></p><br><br>
			<a href='/products/index'><input class="btn pull-right" type="button" name="continue" value="Continue Shopping" /></a>
		</form>
	</div>
	<div class="container">
		<h1>Shipping Information</h1>
		<form action="/products/shipping" method="post">
			<table>
				<td><p>First Name:</p></td>
				<td><input class="field" type="text" name="first_name" required></td>
				<tr></tr>
				<td><p>Last Name:</p></td>
				<td><input class="field" type="text" name="last_name" required></td>
				<tr></tr>
				<td><p>Address:</p></td>
				<td><input class="field" type="text" name="address" required></td>
				<tr></tr>
				<td><p>Address 2:</p></td>
				<td><input class="field" type="text" name="address2"></td>
				<tr></tr>
				<td><p>City:</p></td>
				<td><input class="field" type="text" name="city" required></td>
				<tr></tr>
				<td><p>State:</p></td>
				<td><input class="field" type="text" min="2" name="state" required></td>
				<tr></tr>
				<td><p>Zipcode:</p></td>
				<td><input class="field" type="text" name="zip" required></td>
			</table>
			<h1>Billing Information</h1>
			<!-- <form action="/products/shipping" method="post"> -->
				
		
		
			<table>
				<td><p>First Name:</p></td>
				<td><input class="field" type="text" name="first_name" required></td>
				<tr></tr>
				<td><p>Last Name:</p></td>
				<td><input class="field" type="text" name="last_name" required></td>
				<tr></tr>
				<td><p>Address:</p></td>
				<td><input class="field" type="text" name="address" required></td>
				<tr></tr>
				<td><p>Address 2:</p></td>
				<td><input class="field" type="text" name="address2"></td>
				<tr></tr>
				<td><p>City:</p></td>
				<td><input class="field" type="text" name="city" required></td>
				<tr></tr>
				<td><p>State:</p></td>
				<td><input class="field" type="text" min="2" name="state" required></td>
				<tr></tr>
				<td><p>Zipcode:</p></td>
				<td><input class="field" type="text" name="zip" required></td>
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

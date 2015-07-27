<html>
<head>
	<title>Rent your textbook on Bargain Books</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<style>
	
	.navbar {
		color: white;
		clear: none;
	}
	.nav h3 {
		font-family: calibri-bold,Tahoma,Arial;
		margin-left: 30px;
		color: #fff;

	}
	.nav h6 {
		font-size: 14px;
		font-family: calibri-bold;
		color: #DDE0C3;
		text-shadow: 1px 1px #777;
		font-family: calibri-regular,Tahoma,Arial;
		margin-left: 30px;
	}
	li a {
		margin-right: 30px;
		color: white;
		font-family: calibri-bold,Tahoma,Arial;
	}

	</style>
</head>

<body>
<div class="navbar navbar-fixed-top">
	<div class="nav navbar-nav navbar-left"><a href="/products/index"><h3>BARGAIN BOOKS</h3></a>
			<h6>Affordable Education for Everyone</h6>
	</div>
		 <ul class="nav navbar-nav navbar-right">
				<li class="pull-right"><a href="/admin">MY ACCOUNT</a></li>
			<?php if(empty($this->session->userdata('total')))
				{?>
				<li class="pull-right"><a href="/products/carts">SHOPPING CART (0)</a></li>
			<?php } 
				else { ?>
					<li><a href="/products/carts">Shopping Cart (<?=$this->session->userdata('total');?>)</a></li>
			<?php } ?>
		</ul>
</div>
</body>
</html>
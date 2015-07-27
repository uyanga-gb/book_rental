<!DOCTYPE html>
<html lang="en">
  <head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <style type="text/css">
	body {
		background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/dashboard_bck2.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.navbar {
		padding-top: 20px;
		border-bottom: 2px solid black;
		background-color: transparent;
	}
	ul .nav {
		color: white;
	}
	li .navbar-brand {
		color: white;
		font-size: 24px;
	}
	ul li .nav {
		color: white;
	}
	.row {
		margin-top: 15px;
	}
	h3 {
		margin-top: 200px;
		text-align: center;
		color: #DDE0C3;
		font-family: calibri-bold, Tahoma,Arial;
	}
	h4 {
		margin-top: 20px;
		text-align: center;
		color: #DDE0C3;
		font-family: calibri-bold, Tahoma,Arial;
	}
  </style>
  </head>
 <body>

  		<div class="navbar navbar-fixed-top">
       		<div class="container">
	       		<ul class="nav list-inline">
		       		<li><a class="navbar-brand col-sm-3 col-xs-12" href="/admin/orders/<?=$user['validID']?>">Dashboard</a></li>
				    <li><a class="nav navbar-nav col-sm-3 col-xs-4" href="/admin/orders/<?=$user['validID']?>">Orders</a></li>
				    <li><a class="nav navbar-nav col-sm-3 col-xs-4"  href="/admin/products/<?=$user['validID']?>">Products</a></li>
			    	<li><a class="nav navbar-nav col-sm-3 col-xs-4" href="/admin/signin">Log off (your ID: <?=$user['validID']?>)</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h3>Congratulations! You can simply enter your book details on "Products" section, and it will be immediataly available on the board.</h3>
			<h4>You can check your book order details on "Orders" section.</h4>
		</div>
 </body>
 </html>
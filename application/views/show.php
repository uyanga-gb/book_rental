<?php 
	require('nav_bar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <style type="text/css">
	  .container {
	  	padding-top: 10px;
	  }
	  .big {
	  	height: 280px;
	  	width: 280px;
	  }
	  .small {
	  	height: 52px;
	  	width: 52px;
	  	display: inline-block;
	  	margin-top: 5px;
  		}
  </style>
</head>
<body>
 	<div class="container">
 		<div class="row col-md-12"><a href="/products/category">Go Back</a></div>
 		<div class="row col-md-12"><h4>Product Name</h4></div>
 		<div class="row">
 			<div class="col-md-5">
 				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive big" alt="Responsive image">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive small" alt="Responsive image">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive small" alt="Responsive image">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive small" alt="Responsive image">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive small" alt="Responsive image">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRkkcKZAKLOuc8V85Bf_QCi2OBvGn7Dy5HTEp5b5zZtAEVhMYP13w" class="img-responsive small" alt="Responsive image">
	 		</div>
 			<div class="col-md-6 col-md-offset-1">
 				<p>Product Description</p>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-md-2 col-md-offset-8 text-right">
 				<select name="quantity">
					<?php for($i=1; $i<10; $i++) : ?>
					<option value="<?= $i; ?>"><?= $i.'($'.$i*19.99.')'; ?></option>
					<?php endfor; ?>
				</select>
			</div>
			<div class="col-md-2">
				<form action="/products/buy/<?= $key['id'] ?>" method="post">
				<button class="btn btn-primary btn-xs">Buy</button>
				</form>
			</div>
		</div>
		<div class="row col-md-12"><h4>Similar Items</h4></div>
		<div class="row">
			<div class="col-md-2">
				<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
				<p>Name</p>
			</div>
			<div class="col-md-2">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
	 			<p>Name</p>
	 		</div>
	 		<div class="col-md-2">	
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
	 			<p>Name</p>
	 		</div>
	 		<div class="col-md-2">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
	 			<p>Name</p>
	 		</div>
	 		<div class="col-md-2">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
	 			<p>Name</p>
	 		</div>
	 		<div class="col-md-2">
	 			<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRBwXVwNmnJnxaHDHbJLY2ttOtUUPNxgVI4-OW_rP9NIwqiWA5X" class="img-responsive" alt="Responsive image">
	 			<p>Name</p>
	 		</div>
		</div>
 	</div>
</body>
</html>
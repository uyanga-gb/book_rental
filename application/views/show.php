<?php 
	require('nav_bar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta character="utf-8">
    <title>Show Product : <?=$productID['name']?></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   	<style type="text/css">
	  .container {
	  	padding-top: 10px;
	  }
	  .big {
	  	height: 150px;
	  	width: 150px;
	  }
	  .small {
	  	height: 52px;
	  	width: 52px;
	  	display: inline-block;
	  	margin-top: 5px;
  		}
  		textarea{
  			height: 200px;
  			width: 600px;
  			resize: none;
  			border: 0px;
  		}
  </style>
</head>
<body>
 	<div class="container">
 		<a href="/products">Go Back</a>
 		<div class='row'>
 			<div class='col-md-2 col-md-offset-2'>
 				<img class='big'src="<?=$productID['imageid']?>" alt = "<?=$productID['imageid']?>">
 			</div>
	 		<div class="col-md-7">
	 			<h4><?=$productID['name']?></h4>
	 			<textarea><?=$productID['description']?></textarea>
	 		</div>
	 	</div>
 		<div class="row container">
 			<form action="/products/buy/<?=$productID['id']?>" method="post">
 				<div class="col-md-2 col-md-offset-8 text-right">
 					<select name="quantity">
						<?php for($i=1; $i<10; $i++) : ?>
						<option value="<?= $i; ?>"><?= $i.'   ($'.$i*$productID['price'].')'; ?>
						</option>
						<?php endfor; ?>
					</select>
					<button class="btn btn-primary btn-xs">Buy</button>
				</div>
			</form>
		</div>
 	</div>
</body>
</html>
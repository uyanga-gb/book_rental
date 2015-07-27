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
	  body {
	  	background-color: #C5BAA2;
	  }
	  .container {
	  	padding-top: 100px;
	  }
	  .thumbnail {
	  	height: auto;
	  	width: 100%;
	  }
	  .col-xs-6 {
	  	margin-top: 20px;
	  }
	  .small {
	  	display: inline-block;
	  	margin-top: 5px;
  		}
  		textarea{
  			min-height: 180px;
  			width: 450px;
  			/*resize: none;*/
  			border: 0px;
  			border-radius: 3px;
  			opacity: 0.6;
  			margin: 5px 10px 40px 5px;
  			padding: 10px;
  			color: #737373;
  		}
  		h4 {
  			color: #fff;
  		}
  		a {
  			color: #DDE0C3;
  		}
  		
  </style>
</head>
<body>
 	<div class="container">
 		<a href="/products">Go Back</a>
 		<div class='row'>
 			<div class='col-xs-6 col-sm-6'>
 				<img class='thumbnail'src="<?=$productID['imageid']?>" alt = "<?=$productID['imageid']?>">
 			</div>
	 		<div class="col-xs-6">
	 			<h4><?=$productID['name']?></h4>
	 			<textarea><?=$productID['description']?></textarea>
 				<form class="form-group" action="/products/buy/<?=$productID['id']?>" method="post">
 				<div class="row">
 					<div class="col-xs-4 text-right">
	 					<select class="form-control" name="quantity">
							<?php for($i=1; $i<10; $i++) : ?>
							<option value="<?= $i; ?>"><?= $i.'   ($'.$i*$productID['price'].')'; ?>
							</option>
							<?php endfor; ?>
						</select>
					</div>
					<div class="col-xs-2">
						<button class="btn btn-primary btn-small">Buy</button>
					</div>
				</div>
				</form>
			</div>
	 	</div>
 	</div>
</body>
</html>
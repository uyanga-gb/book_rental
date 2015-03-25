<?php require_once('nav_bar.php'); ?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script type="text/javascript">
			$(document).on('click','img',function(res){
					$(this).attr('alt').trigger('/');
				});
			});
		</script>
		<style rel='stylesheet'>
			.container {
				padding-top: 20px;
			}
			.inner-addon {	position: relative; }	
			.inner-addon .glyphicon {	
				position: absolute;
				padding: 14px;
			}	
			.right-addon input {	
				padding-right: 30px;
			}
			.right-addon .glyphicon { right: 0px;}
			img { 
				height: 150px; 
				widows: 150px;
				padding: 5px 4px 5px 4px;
				display: inline-block;
			}
			h4 {
				display: inline-block;
			}
			p {
				display: inline-block;
			}
			
			div .col-md-3 {
				padding-right: 15px;
				display: inline-block;
			}
			.leftpad20 {
				padding-left: 20px;
				border: 2px solid black;
				border-radius: 20px;
			}
			.paddingtop10px{padding-top: 10px;}
			.font12{font-size: 18px;}
		</style>
	</head>
	<body>
	<div class="container">	
		<div class='row'>
			<div class='col-md-2 paddingtop10px'> 
				<div class="row features col-md-12 leftpad20">						
					<div class="inner-addon right-addon form-group paddingtop10px ">
		  				<i class='glyphicon glyphicon-search paddingtop10px '></i>
		  				<input type="text" class="form-control" placeholder="search">
		  			</div>
					<label>Categories</label><br>
						<?php 
						foreach ($categories as $category) {?>
							<a href='/products/category/<?=$category["category_id"]?>'><?= $category['category_name'] ?> (<?=$category['cat_count']?>)</a><br>
						<?php }	?>
						<a href='/products'>Show All</a>
				</div>		
			</div>
			<div class='col-md-9 leftpad20'>
				
				<form class='form-inline padding-top: 10px;'>
					<?php foreach ($images as $image) {?>

						<div class="col-md-4 col-md-offset-1">
						<img src="<?=$image['imageid']?>" alt="<?=$image['imageid']?>">
						<h4><?=$image['name']?></h4>
						<p><?=$image['price']?></p>
						</div>
					<?php }?>
				</form>
				<div>
					<center class='font12 col-md-12'><a>1</a>|<a>2</a>|<a>3</a>|<a>4</a>|<a>5</a>|<a>6</a>|<a>7</a>|<a>></a><center>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
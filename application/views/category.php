 <?php require_once('nav_bar.php'); ?> 

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<style rel='stylesheet'>
			body {
							
				background: url("https://s3-us-west-2.amazonaws.com/bookrental/background1.jpg") top no-repeat, url("https://s3-us-west-2.amazonaws.com/bookrental/dashboard_bck3.jpg") bottom repeat-y;
				background-size: 100%;
				margin: 0 auto;

			}
			.container {
				padding-top: 100px;
				/*background-image: url("background1.jpg");*/
			}
			.paddingtop10px {
				color: #DDE0C3;
				font-family: calibri-bold, Tahoma,Arial;
			}
			i { 
				border: 1px solid #fff;;
				padding: 1px;
			}
			#book_frame {
				height: 280px;
				width: 400px;
				margin: 10px 5px 5px 70px;
				display: inline-block;
				text-align: left;
				
			}
			img { 
				height: 250px; 
				widows: 250px;
				padding: 15px 4px 5px 14px;
				display: inline-block;
				text-align: center;
				border-radius: 5px;
				vertical-align: center;
				margin-left: 60px;
				margin-top: 10px;
			}
			h5 {
				height: 38px;
				display: block;
				color: #fff;
				font-family: calibri-bold, Tahoma,Arial;

			}
			p {
				display: block;
				color: #fff;
				color: #DDE0C3;
				font-family: calibri-bold, Tahoma,Arial;
				border-bottom: 1px solid #DDE0C3;
				margin-bottom: 10px;
			}
			.col-md-3 {
				padding-right: 15px;
				display: inline-block;
			}
			.leftpad20 {
				border: 2px solid black;
				border-radius: 20px;
				padding-top: 5px;
			}
			#search_bar {
				margin-top: 70px;
				background-color: transparent;
				border: solid 1px transparent;
				border-radius: 10px;
				width: 100%;
				height: 50px;
				position: relative;
			}
			#search_box {
				color: #262626;
				/*background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/background1.jpg");*/
				font-size: 15px;
				padding-top: 10px;
				height: 50px;
				border-radius: 10px;
				opacity: 0.6;
				/*background-color: transparent;*/
				border: solid 1px transparent;
				width: 99%;
				padding-left: 1%;
				font-family: Arial;
				float: left;
			}
			#search {
				position: absolute;
				height: 52px;
				top: -1px;
				right: -3px;
				width: 140px;
				border-radius: 10px;
				background-color: #e89d27;
				
				border: solid 1px #e89d27;	
				cursor: pointer;
				-webkit-appearance: none;
				}	
			#search a {
				text-decoration: none;
				color: #fff;
				font-size: 19px;
				font-family: calibri-bold, Tahoma,Arial
				}	
			.font12 a {
				display: inline-block;
				font-size: 14px;
				padding: 5px;
			}
			#text {
				font-size: 18px;
				color: #fff;
				font-family: calibri-bold, Tahoma,Arial;
				margin-top: 30px;
				text-align: center;
			}
			#text2 {
				font-size: 14px;
				color: #737373;
				font-family: calibri-bold, Tahoma,Arial;
				margin-top: 10px;
				text-align: center;
			}
			#category {
				margin-top: 100px;
				background-color: #262626;
				opacity: 0.6;
				padding: 20px;
				width: 100%;
				height: 150px auto;
				border-radius: 10px;
				color: white;
				margin-bottom: 180px;
			}
			.category label {
				font-size: 18px;
				color: #DDE0C3;
				font-family: calibri-bold, Tahoma,Arial
			}
			.category a {
				padding: 10px;
				text-align: left;
				color: white;
			}
			a span {
				margin-left: 50px;
			}
			
		</style>
</head>
<body>
	<div class="container">	
		<div class='row'>
			<form class='form-group' action='/products/products_search/search' method='post'>		
			<div id="search_bar" class='col-xs-4 paddingtop10px'> 				
				<input id="search_box" type="text" class="form-control" name='search' placeholder="Book title, or Keyword">
				<button class="btn btn-small" type="submit" id="search">
	  				<a class="search-magnify-btn-close href="#"">SEARCH</a>
	  			</button>	
	  		</div>
			</form>
		  	<div class="col-xs-7"></div>
		</div>
		<h4 id="text">Rent books to save or earn by leasing your books for others.</h4>
		<h5 id="text2">Please register to lease your book.</h5>
		<div id="category" class="col-xs-12 category">	
			<label>Choose by Categories</label></br>
				<?php
				foreach ($categories as $category) {?>
					<a href='/products/category/<?=$category["category_id"]?>'><?= $category['category_name'] ?> (<?=$category['cat_count']?>)</a> | 
				<?php }	?>
				<a href='/products'><span id="center"> ~ Show All ~ </span></a>
		</div>		
			
		
		<div class="row">
			<div class="col-xs-3">
				<!-- <h3><?=$images[0]['name']?></h3> -->
			</div>
			<div class="col-xs-3 col-xs-offset-5 paddingtop10px">
				<!-- <form class="form-group" action="/products/sort/<?=$images[0]['category_id']?>">
		Sorted by <select class="form-control" name="sort">
					<option><a href="link">Price</a></option>
					<option><a href="link">Most Popular</a></option>
			    </select>
				</form> -->
			</div>
			<div class="col-xs-1">
			</div>
		</div>
		<div class="row">
				<?php	
				foreach ($images as $image) {?>
		<div class="col-md-6 col-sm-6 col-xs-12" >
					<a href="/products/show/<?=$image['id']?>"><img src="<?=$image['imagefile']?>" alt="<?=$image['imagefile']?>"></a>
					<h5><?=$image['name']?></h5>
					<p>Rent at $<?=$image['price']?></p>
		</div>
		
				<?php }?>
		</div>	
		<!-- <div>
			<center class='font12 col-md-12'><a>1</a>|<a>2</a>|<a>3</a>|<a>4</a>|<a>5</a>|<a>6</a>|<a>7</a>|<a>></a><center>
		</div> -->
		
	</div>
</body>
</html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <style>
    	body {
    		background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/colors.jpeg");
    		background-repeat: no-repeat;
    		background-size: cover;
    	}
    	.container {
    		margin-top: 100px;
    	}
		table {
			margin: 0 auto;
			vertical-align: top;
		}
		td {
			color: #737373;
		}
		textarea, .input, select {
			resize: none;
			width: 300px;
			opacity: 0.4;
		}
		textarea {
			height: 200px;
			opacity: 0.4;
		}
		h2, span {
			display: inline-block;
		}
		h2 {
			margin-left: 90px;
		}
		#table-2 {
			margin-left: 500px;
		}
		.image-list{
			height: 75px;
			width: 75px;
		}
		.table	{
			border: 0px ;
		}
		.form-control {
			opacity: 0.4;
		}
		.col-xs-1 span {
			background-color: transparent;
			border: none;
		}
	
    </style>
</head>
<body>
	<div class="container">
	<div class='col-xs-8 col-xs-offset-3'>
	<form action="/admin/add_item/<?=$user?>" id ="form1" method="post" class="form-group">
		<!-- this is to display the details of the product -->
		<table class='table'>
			<tr>
				<td>Owner ID</td>
				<td><input class="form-control" type="text" name="user_id" value="<?=$user?>"></td>
			</tr>
			<tr>
				<td>Book Title</td>
				<td><input class="form-control" type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>Details</td>
				<td><textarea class="form-control" name="description"></textarea></td>
			</tr>
			<tr>
				<td>Categories</td>
				<td>
					<select class="form-control" name="categories">
					<?php foreach($categoryList as $keyCategory) {
						if ($keyCategory['category_id'] == $productDetails['category_id'] ){
							echo '<option value="'.$keyCategory['category_id'].'" selected>'.$keyCategory['category_name'].'</option>';
						}
						else {
							echo '<option value="'.$keyCategory['category_id'].'">'.$keyCategory['category_name'].'</option>';
						}
					} ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>or add new category</td>
				<td><input class="form-control" type="text" name="new_category"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input class="form-control" type="text" value="" name="quantity"></input></td>
			</tr>
			<tr>
				<td>Book Price</td>
				<td><input class="form-control" type="text" value="" name="price"></input></td>
			</tr>
		</table>
		<table  class='table'>
			<tr>
				<td>Images URL</td>
				<td><input class="input" value="" name="image"></input></td>
				<!-- <td><input type="file" accept="image/*" name="image[]" multiple  value="upload" onchange="loadFile(event)"></td> -->
			</tr>
			<tr>
			<td>						
				<div class="col-xs-1 input-group">
					<span class='input-group-addon'>
						<input type='checkbox' name='main' value='y'>Main
					</span>
				</div>
				<div class="col-xs-1 input-group">
					<span class='input-group-addon'>
						<input type='checkbox' name='optional' value='n'>Optional
					</span>
				</div>
			</td>
				<!-- <td>
						<a href='/admin/delete/<?=$mode?>' ><span class="glyphicon glyphicon-trash"/></a>
					</td> -->
				</tr>
		
		</table>
		<table class='table'>
			<tr>
				<td><input class='btn btn-medium'type="submit" name="cancel" value="Cancel" style="background-color:white"></td>
				<td><input type="submit" class="btn btn-small" name="Preview" value="PREVIEW" style="background-color:#e89d27; color: #fff;"></td>
				<td><input type="submit" class="btn btn-medium" name="add" value="ADD" style="background-color:#34AAB8; color:white"></td>
			</tr>
		</table>
    </form>
	</div>
	</div>
</body>
</html>

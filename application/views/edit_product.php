<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <style>
		body {
    		background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/colors.jpeg");
    		background-repeat: no-repeat;
    		background-size: cover;
    	}
		table {
			margin: 0 auto;
			vertical-align: top;
		}
		textarea, .input, select {
			resize: none;
			width: 300px;
		}
		textarea {
			height: 200px;
		}
		h2, span {
			display: inline-block;

		}
		h2 {
			margin-left: 90px;
			color: #737373;
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
		td {
			color: #737373;
		}
		.col-xs-1 span {
			background-color: transparent;
			border: none;
		}
    </style>
</head>
<body>
	<div class='col-xs-8 col-xs-offset-3'>
	<?php
		if(isset($productDetails['description'])) {	echo '<h2>Edit Product - ID '. $mode.'</h2>'; }
		else{	echo '<h2>ADD Product - ID '. $mode .'</h2>';  }
	?>
	<span class="glyphicon glyphicon-remove pull-right" aria-hidden="true"></span>
	<form action="/admin/update/<?=$mode?>" id ="form1" method="post" runat="server">
		<!-- this is to display the details of the product -->
		<table class='table'>
			<tr>
				<td>Name</td>
				<td><input class="input" type="text" name="name" value=" <?php
					if(isset($productDetails['name'])) {
						echo $productDetails['name']; }
					?>">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="description">
					<?php if(isset($productDetails['description'])) {
						echo $productDetails['description']; }	?>
					</textarea></td>
			</tr>
			<tr>
				<td>Categories</td>
				<td>
					<select name="categories">
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
				<td><input class="input" type="text" name="new_category"></td>
			</tr>
		</table>
		<table  class='table'>
			<tr>
				<td>Images</td>
				<td><input type="file" accept="image/*" name="image[]" multiple  value="upload" onchange="loadFile(event)"></td>
			</tr>
			<?php 
			if (isset($productImage)){
			foreach ($productImage as $picture) {?>
				<tr>
					<td>
						<img class='image-list' src="<?=$picture['imageid']?>" alt="<?=$picture['imageid']?>"/>
						imageid.png
					</td>
					<td>						
						<div class="col-xs-1 input-group">
							<span class='input-group-addon'>
								<input type='checkbox' name='main' value='main'>Main
							</span>
						</div>
					</td>
					<!-- <td>
						<a href='/admin/delete/<?=$mode?>' ><span class="glyphicon glyphicon-trash"/></a>
					</td> -->
				</tr>
			<?php } } ?>
		</table>
		<table class='table'>
			<tr>
				<td><input class='btn btn-small' type="submit" name="cancel" value="Cancel" style="background-color:white"></td>
				<td><input class="btn btn-small" type="submit" name="Preview" value="Preview" style="background-color:#e89d27; color: #fff;"></td>
				<td><input class="btn btn-small" type="submit" name="Update" <?php 
														if(isset($productDetails['description'])){
															echo 'value="Update"'; }
														else {echo 'value="Add"'; }
														?>
					style="background-color:#34AAB8; color:white"></td>
			</tr>
		</table>
    </form>
	</div>
</body>
</html>

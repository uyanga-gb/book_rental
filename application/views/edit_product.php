<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		var loadFile = function(event) {
			var reader = new FileReader();
			reader.onload = function(){
				var output = document.getElementById('img_show');
				$('#img_show').width(200);
				output.src = reader.result;
			};
			reader.readAsDataURL(event.target.files[0]);
		};
	</script>
    <style>
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
		}
		#table-2 {
			margin-left: 500px;
		}

    </style>
</head>
<body>
	<?php
		if(isset($mode)) { echo '<h2>Edit Product - ID'.$mode['id'].'</h2>'; }
		else {	echo '<h2>Add Product - ID NEW</h2>'; }
	?>
	<span class="glyphicon glyphicon-remove pull-right" aria-hidden="true"></span>
	<form action="#" id ="form1" method="post">
		<!-- this is to display the details of the product -->
		<?php foreach($productDetails as $key){?>
		<table>
			<td>Name</td>
			<td><input class="input" type="text" name="name" value="Hat"></td>
			<tr></tr>
			<td>Description</td>
			<td><textarea name="description">Great Fit, Cool new colors</textarea></td>
			<tr></tr>
			<td>Categories</td>
			<td>
				<select name="categories">
					<?php foreach($categoryList as $keyCategory) {
						if($keyCategory['id'] == $key['category_id'] ){
							echo '<option value="'.$keyCategory['id'].'" selected>'.$keyCategory['category_name'].'</option>';
						else {
							echo '<option value="'.$keyCategory['id'].'">'.$keyCategory['category_name'].'</option>';
						}
					}?>
					<option value="hat">Hat</option>
					<option value="mug">Mug</option>
					<option value="pants">Pants</option>
					<option value="key_chain">Key Chain</option>
					<option value="belt">Belt</option>
					<?= } ?>
				</select>
			</td>
			<tr></tr>
			<td>or add new category</td>
			<td><input class="input" type="text" name="new_category"></td>
			<tr></tr>
			<td>Images</td>
			<td><input type="file" accept="image/*" name="image[]" multiple  value="upload" onchange="loadFile(event)"></td>
			<tr></tr>
			<td></td>
			<td><img id="img_show" aria-hidden="true"/><span class="glyphicon glyphicon-trash inner-addon right-addon" /></td>
			<td></td>
		</table>
		<table id="table-2">
			<td><a href='/'><input type="submit" name="cancel" value="Cancel" style="background-color:white"></a></td>
			<td><input type="submit" name="Preview" value="Preview" style="background-color:green"></td>
			<td><input type="submit" name="Update" value="Update" style="background-color:blue; color:white"></td>
		</table>
    </form>
</body>
</html>

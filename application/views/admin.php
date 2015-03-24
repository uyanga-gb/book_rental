<!DOCTYPE html>
<html lang="en">
  <head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	 <style type="text/css">
	body {
		padding-top: 50px; 
	}
	.row button {
		box-shadow: 2px 2px black;
	}
	.row {
		margin-top: 15px;
	}
	input {
		border: 2px
	}
  </style>
  </head>
 <body>
 	<div class="container">
 		<div class="row">
			  <div class="col-md-offset-2 col-md-10"><h3>Admin Login Page</h3></div>
		</div>
		<form action="/admin/orders" method="post">
			<input type="hidden" name="login">
			<div class="row">
			 	<div class="col-md-offset-2 col-md-6">
				    <label for="exampleInputEmail1">email:</label>
				    <input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">	
				<div class="col-md-offset-2 col-md-6">
					
					    <label for="exampleInputPassword1">Password:</label>
					    <input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
				<div class="col-md-offset-7 col-md-4"><button type="submit" class="btn btn-primary btn-sm">Login</button></div>
				<div class="col-md-1"></div>
			</div>
		</form>
	</div>
 </body>
 </html>
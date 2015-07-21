 <?php require_once('nav_bar.php'); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta character="utf-8">
    <title></title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	 <style type="text/css">
	body {
		padding-top: 50px; 
		background-image: url("https://s3-us-west-2.amazonaws.com/bookrental/dashboard_bck1.jpg");
		background-repeat: no-repeat;
		background-size: cover; 
	}
	.container {
		margin-top: 100px;
	}
	.row button {
		box-shadow: 2px 2px #DDE0C3;
	}
	.row {
		margin-top: 15px;
	}
	input {
		border: 2px;
		color: black;
		opacity: 0.9;
	}
	h3 {
		color: #DDE0C3;
		margin-bottom: 30px;
	}
	label {
		color: #737373;
		margin-top: 15px;
	}
	.error {
		color: red;
		font-style: italic;
	}
	button {
		margin-top: 15px;
		background-color: #e89d27;
		font-family: calibri-bold, Tahoma,Arial;
		color: #fff;

	}
  </style>
  </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-xs-4">
		 		<?php
					if($this->session->flashdata('error')) {
						$message = $this->session->flashdata('error'); ?>
					<div class="<?= $message['class']?>"><?= $message['message']; ?></div>
					<?php 
					}
				?>
					<div class=" col-xs-12"><h3>Log in</h3></div>

				<form action="/admin/validate" method="post">
					
					 	<div class=" col-xs-12">
						    <label for="exampleInputEmail1">email:</label>
						    <input type="email" class="form-control" name="email" required id="exampleInputEmail1">
						</div>
						<div class="col-xs-12">
							<label for="exampleInputPassword1">Password:</label>
							<input type="password" title="Password must contain at least 4 characters, including UPPER/lowercase and numbers" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" name="password" onchange="form.pwd2.pattern = this.value;" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="col-xs-2"><button type="submit" class="btn btn-sm">LOGIN</button></div>
				</form>
			</div>
			<div class="col-xs-5">
		          <?php if($this->session->flashdata('reg_err'))
		                {
		          $message=$this->session->flashdata('reg_err');?>
		           <p style="color: red;"><?= $message?></p>
		         <?php  } 
		              if($this->session->flashdata('success'))
		              {
		                $success=$this->session->flashdata('success');?>
		           <p style="color:green;"><?= $success['message']?></p>
		            <?php  }?>
				<div class="col-xs-12"><h3>Register</h3></div>
				<form action="/admin/register" method="post">
				 	<div class=" col-xs-12">
					    <label for="exampleInputEmail1">Email:</label>
					    <input type="email" class="form-control" name="email" required id="exampleInputEmail1">
					</div>
					<div class="col-xs-12">
						<label for="exampleInputPassword1">Password:</label>
						<input type="password" title="Password must contain at least 4 characters, including UPPER/lowercase and numbers" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" name="password" onchange="form.pwd2.pattern = this.value;" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="col-xs-12">
						<label for="exampleInputPassword1">Confirm Password:</label>
						<input type="password" title="Password must contain at least 4 characters, including UPPER/lowercase and numbers" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" name="confirm_password" onchange="form.pwd2.pattern = this.value;" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="col-xs-2"><button type="submit" name="button" class="btn btn-sm">REGISTER</button></div>
				</form>			
		  	</div>	
		  	<div class="col-xs-3"></div>	
		</div>	
	</div>
 </body>
 </html>
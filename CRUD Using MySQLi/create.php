<?php
	include("inc/function.php");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD Application </title>
		<!--bootstrap link-->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		
		<!--font awsome link-->
			<script src="https://kit.fontawesome.com/74f12b28c5.js" crossorigin="anonymous"></script>
        <!--css -->
			
	</head>

	<body>
		<!--nav bar-->
		<?php include ( "asset/header.php" )?>
		<!--create View -->
		<div class="container">		
			<h1  class="form-text text-center"><i class="fas fa-user"></i> Create User </h1>
			<hr>
		
			<form method="post" action="" enctype="multipart/form-data" name="create_user">
				<div class="row mx-auto">
					<div class="col-md-12">
						<div class="form-group">
							<label> Name </label>
							<input type="text" name="user_name" required value="" placeholder="Enter your name !" class="form-control">

						</div>
						<div class="form-group">
							<label> Email </label>
							<input type="email" name="user_email" required value="" placeholder="Enter your email !" class="form-control">
							<label></label>
						</div>
						<hr >
						<div class="form-group text-center">
							<button class="btn btn-primary btn-lg" style="margin-right: 3%" type="submit" name="add_user"><i class="fas fa-user-plus"></i> Create User </button>	
							<a href="index.php" class="btn btn-danger btn-lg" style="margin-left: 3%"> <i class="fas fa-times" ></i> Cancel User </a>	
						</div>
					</div>
				</div>
			</form>
		</div>
		<?php 
			if(isset($_POST['add_user'])){
				$user_name = $_POST['user_name'];
				$user_email = $_POST['user_email'];
				addUser($user_name, $user_email);
			}
		
		?>
	</body>
</html>

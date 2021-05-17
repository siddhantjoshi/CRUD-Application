<?php
	include("inc/db.php");
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
		<?php 
			//nav bar
			include("asset/header.php");
			//List View
			include("asset/list.php");
		?>
	</body>
</html>
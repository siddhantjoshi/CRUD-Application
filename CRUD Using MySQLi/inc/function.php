
<?php
	$con=mysqli_connect("localhost","root","","user");

	function addUser($user_name, $user_email){
		global $con ;
		$date = date('Y-m-d');
		$add = "insert into user(user_name, user_email, create_date) values('$user_name','$user_email','$date')";
		$run = mysqli_query($con,$add);
		if($run){
			echo "
				<script>alert('User Added !')</script>
				<script>window.open('index.php','_self')</script>
			";
		}else{
			echo "
				<script>alert('Error !')</script>
				<script>window.open('create.php','_self')</script>
			";

		}
	}
	
	function updateUser($user_name, $user_email, $user_id){
		
		global $con ;
		$date = date('Y-m-d');
		$add = "update user set user_name='$user_name', user_email='$user_email', create_date = '$date' where user_id='$user_id'";
		$run = mysqli_query($con,$add);
		if($run){
			echo "
				<script>alert('User Updated !')</script>
				<script>window.open('index.php','_self')</script>
			";
		}else{
			echo "
				<script>alert('Error !')</script>
				<script>window.open('edit.php?user_id=$user_id','_self')</script>
			";
		}
	}
	
	function deleteUser($user_id){
		global $con ;
		$del="delete from user where user_id='$user_id'";
		$run=mysqli_query($con,$del);
		if($run){
			echo(
					"<script>alert('User Deleted')</script>
					<script>window.open('index.php','_self')</script>"
				);
		}
	}
	
?>
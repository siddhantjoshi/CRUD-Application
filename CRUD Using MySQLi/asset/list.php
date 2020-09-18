
<!--List View -->
<div class="container mx-auto"	>
	<div class="row" style="margin-top: 2%">
		<div class="col-6"><h2>User List </h2></div> 
		<div class="col-6 text-right"><a href="create.php" class="btn btn-success btn-lg float-right create"><i class="fas fa-plus"></i> Create User</a></div>
	</div>
	<hr>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th> ID</th>
				<th> User </th>
				<th> Email </th>
				<th> Operation </th>
			</tr>
		</thead>
		<?php
			$numid = 0 ;
			$list = "select * from user";
			$run = mysqli_query($con,$list);
			while($row = mysqli_fetch_array($run)){
				$user_id = $row['user_id'];
				$user_name = $row['user_name'];
				$user_email = $row['user_email'];
				$numid ++ ;
		?>
		<tbody>
			<tr>
				<td><?php echo $numid ;?></td>
				<td><?php echo $user_name ; ?></td>
				<td><?php echo $user_email ; ?></td>
				<td>
					<a href="edit.php?user_id=<?php echo $user_id ?>" class="btn btn-primary"><i class='fas fa-edit'></i></a>
					<a href="delete.php?user_id=<?php echo $user_id ?> " class="btn btn-danger "><i class='fas fa-trash-alt'></i></a>

				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table> 
</div>

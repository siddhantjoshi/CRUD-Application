<?php
include("inc/function.php");

if(isset($_GET['user_id'])){
	$user_id=$_GET['user_id'];
	deleteUser($user_id);
}
?>
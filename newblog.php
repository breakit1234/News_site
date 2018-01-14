<?php
session_start();
require('function.php');
	
	$title=$_POST["title"];
	$description=$_POST["description"];

	$con = con();

	$user_id=$_SESSION["id"];

	$query = "SELECT * FROM user U where U.id = '$user_id'";
	$result = $con->query($query);
	$arr = $result->fetch_array();
	$first=$arr["first_name"];

		$ins_query = "INSERT INTO post (user_id,title,description,name) VALUES ('$user_id','$title','$description','$first')" ;
		$ins_res = $con->query($ins_query);
		
		$_SESSION['id'] = $user_id;
		echo "<script>alert('Successfully updated');window.location='postblog.php';</script>";
		die();
	
?>

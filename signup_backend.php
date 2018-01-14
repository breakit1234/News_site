<?php
session_start();
require('function.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){

	$email = validate($_POST["email"]);
	$firstname = validate($_POST["firstname"]);
	$lastname = validate($_POST["lastname"]);
	$password = validate($_POST["password"]);

	$con = con();

	echo $query = "SELECT * FROM user U where U.email='$email' ";
	$result = $con->query($query);

	if($result->num_rows>0){
		echo "<script>alert('User with email-id exists.');window.location='login.php';</script>";
		die();
	}
	else
	{
		$ins_query = "INSERT INTO user (email,first_name,last_name,password) VALUES ('$email','$firstname','$lastname','$password')" ;
		$ins_res = $con->query($ins_query);
		$search_user = "SELECT * FROM user U where U.email = '$email'";
		$search_result = $con->query($search_user);
		$arr = $search_result->fetch_array();
		$user_id = $arr['id'];
		$_SESSION['id'] = $user_id;
		echo "<script>alert('Successfully Signed Up');window.location='index.php';</script>";
		die();
	}

}



?>
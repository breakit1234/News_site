<?php
require('function.php');

$con = con();

	//SQL Query
	$user_id="";
	session_start();
	$user_id = $_SESSION['id'];
//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
	$query = "SELECT * FROM user U where U.id = '$user_id'";

	$result = $con->query($query);

	$arr = $result->fetch_array();

	$email = $arr["email"];
	echo $email;
	$first=$arr["first_name"];
	echo $first;
?>

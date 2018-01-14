<?php

session_start();

require('function.php');

$con = con();

if($_SERVER["REQUEST_METHOD"] == "POST"){

	//Accessing details submitted using form
	$email = validate($_POST["email"]);
	$password = validate($_POST["password"]);

	//SQL Query
	$query = "SELECT * FROM user U WHERE U.email = '$email' ";

	$result = $con->query($query);

	if(mysqli_num_rows($result) == 0){
		echo "<script>alert('No user with email-id exists.');window.location='login.html';</script>";
		//header('location:login.php');
		die();
	}
	else{
		$pass=$user_id="";
		while($arr = $result->fetch_array()){
			$pass = $arr["password"];
			$user_id = $arr["id"];
		}

		if($pass==$password){
			$_SESSION['id'] = $user_id;
			echo "<script>alert('Welcome');window.location='postblog.php' ;</script>";
		}
		else{
			echo "<script>alert('Incorrect Password');window.location='login.php';</script>";
			//header('location:login.php');
			die();
		}
	}

}

?>
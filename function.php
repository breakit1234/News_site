<?php


function validate($val){
	$val=htmlentities($val);
	$val=trim($val);
	return $val;
}


function con(){
	$dbhost="localhost";
	$dbuname="root";
	$dbpassword="";
	$dbname="webster";
	$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);
	if($con->connect_errno){
		die("Not able to connect to database".$con->connect_error);
	}
	else 
	{
		return $con;
	}
}


?>
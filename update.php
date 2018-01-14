<?php


session_start();

require('function.php');

$id=$_POST["id1"];
$con = con();
 
             $stat="UPDATE post SET status = 1 WHERE id=".$id;
             $con->query($stat);
            echo "<script> alert ('Updated successfully');</script>";

?>

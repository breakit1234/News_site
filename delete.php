<?php

function delete(){
session_start();

require('function.php');

$id1=$_POST["$id1"];
$con = con();
 
             $stat="DELETE post WHERE id=".$id1;
             $con->query($stat);
            echo "<script> alert ('Updated successfully');</script>";
}	
?>

<?php

include('config.php');
$a=$_REQUEST['name'];
$b=$_REQUEST['username'];
$c=$_REQUEST['email'];
$d=$_REQUEST['password'];


$sql="INSERT INTO registration_form (name,username,email,password)
VALUES('$a', '$b', '$c', '$d')";

if($db->query($sql) ==TRUE)
{
	echo "you are registered now";
}


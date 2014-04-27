<?php

$name = $_POST['username'];

$pname = $_POST['password'];

if ( $name == "user" and $pname == "pass" )
{
	session_start();
	$_SESSION['val']="true";
	$_SESSION['u_name'] = "Test Person";
	header("location:home.php");
}
else
{
	header("location:index.php");
}

?>
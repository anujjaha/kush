<?php
session_start();
if ( $_SESSION['val'] != "true" )
{

	header("location:index.php");
}

?>
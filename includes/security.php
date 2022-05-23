<?php
session_start();
include ('./includes/config.php');

if ($dbconfig) 
{
	// echo "Database connected";

}
else
{
	header("Location: ./includes/config.php");
}

if(!$_SESSION['email']) 
{
        echo "<script>alert('Oops!!-->session fail')</script>";
	header("Location: log_in.php");

}


?>
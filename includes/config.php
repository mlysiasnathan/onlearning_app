<?php


$server="localhost";
$user = "root";
$pass = "";
$database = "project_onlearning";

$conn = mysqli_connect($server,$user,$pass);
$dbconfig= mysqli_select_db($conn,$database);
if ($dbconfig) 
{
	// die("<script>alert('Database Connection succed')</script>");
}
else
{
	die("<script>alert('Database Connection Failed.')</script>");
}

?>
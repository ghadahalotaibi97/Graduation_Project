<?php

include "config.php";

if($_POST)
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$status=$_POST['status'];
	
	
	$sql="INSERT INTO `register`( `firstname`,  `lastname` ,`email`, `password`, `number`,`status`)  VALUES ('".$firstname."','".$lastname."','".$email."','".$password."','".$number."','".$status."')";
  	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['email'] = $email;

		header('Location: HOOM.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>
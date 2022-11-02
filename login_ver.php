<?php
session_start();
require_once "db_connection.php";
if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	if(empty($email)){
		header('Location:login.php?error=email_empty');
		exit();
	}
	else if(empty($password)){
		header('Location:login.php?error=password_empty');
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header('Location:login.php?error=invalid_email');
		exit();
	}
	else{
		$sql="SELECT `email`, `password` FROM `register` WHERE email='$email' and password='$password'";
		$sql2=mysqli_query($con,$sql);
		if(mysqli_num_rows($sql2)==1){
			$_SESSION['username']=$email;
			header("Location:index.php");
		}
		else{
			header('Location:login.php?error=invalid_details');
		    exit();
		}
	}

}
?>
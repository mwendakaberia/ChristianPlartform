<?php
require_once "db_connection.php";
if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$con_password=mysqli_real_escape_string($con,$_POST['confirm_password']);

	if(empty($email)){
		header('Location:Register.php?error=email_empty');
		exit();
	}
	else if(empty($password)){
		header('Location:Register.php?error=password_empty');
		exit();
	}
	else if(empty($con_password)){
		header('Location:Register.php?error=con_pass_empty');
		exit();
	}
	else if(strlen($password)<6){
		header('Location:Register.php?error=password_too_short');
		exit();
	}
	else if(!preg_match('/[a-z]/', $password)||!preg_match('/[0-9]/', $password)){
		header('Location:Register.php?error=weak_password');
		exit();
	}
	else if($password != $con_password){
		header('Location:Register.php?error=password_mismatch');
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header('Location:Register.php?error=invalid_email');
		exit();
	}
	else{
		$sql="SELECT email from register where email='$email'";
		$sql2=mysqli_query($con,$sql);
		if(mysqli_num_rows($sql2)==1){
			header('Location:Register.php?error=email_taken');
		    exit();
		}else{
			$sql3="INSERT into register (email,password) values ('$email','$password')";
			if(!mysqli_query($con,$sql3)){
				echo "Failed to register";
			}
			else{
				header('Location:login.php');
		        exit();
			}
		}
	}
	
}
?>
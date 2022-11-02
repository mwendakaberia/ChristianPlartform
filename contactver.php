<?php

require_once "db_connection.php";
if(isset($_POST["submit"])){

	$name=$_POST["name"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	$message=$_POST["mes"];

	if(!empty($_POST["name"])||!empty($_POST["tel"])&&!empty($_POST["email"])&&!empty($_POST["mes"])){
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		
        $querry="INSERT INTO `contact`(`Email`, `Tel`, `name`, `message`) VALUES ('$email',$tel,'$name','$message')";
        $querry2=mysqli_query($con,$querry);
        if(!$querry2){
        	echo "Error inserting to database";
        }
        else{
        	header("Location:index.php");
        }
    }
    else{
    	header("Location:contact.php?error=email");
    }



	}
	else{
		header("Location:contact.php?error=empty");
	}
}


  ?>
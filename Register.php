<!DOCTYPE html>
<html>
<head>
	<title>Christian platform signup page</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	<div>
	<center>
		<h1><span class="one">CHRIST</span><span class="two">IAN</span> <span class="three">PLATFORM</span></h1>
	</center>
		<fieldset>
		<legend>CREAT ACCOUNT</legend>
		<center>
			<?php
			if(isset($_GET['error'])){
				if($_GET['error']=='email_empty'){
					echo "<b style='color:red' >Email field is empty";
				}
				if($_GET['error']=='password_empty'){
					echo "<b style='color:red' >Password field is empty";
				}
				else if($_GET['error']=='con_pass_empty'){
					echo "<b style='color:red' >Confirm password field is empty";
				}
				else if($_GET['error']=='password_too_short'){
					echo "<b style='color:red' >Password should be atleast 6 characters";
				}
				else if($_GET['error']=='weak_password'){
					echo "<b style='color:red' >Password must contain letters and numerics";
				}
				else if($_GET['error']=='password_mismatch'){
					echo "<b style='color:red' >The two passwords don't match";
				}
				else if($_GET['error']=='invalid_email'){
					echo "<b style='color:red' >Email entered is inavalid";
				}
				else if($_GET['error']=='email_taken'){
					echo "<b style='color:red' >Email provided is already taken";
				}
			}
			?>
			<form method="POST" action="Register_ver.php">
				<label for="email">Email</label>
			    <input type="text" name="email" placeholder="example@gmail.com"><br><br><br>
			    <label for="password">Password</label>
			    <input type="password" name="password" ><br><br><br>
			    <label for="confirm_password">Confirm_password</label>
			    <input type="password" name="confirm_password" ><br><br><br><br>
			    <button type="submit" name="submit">Register</button>
		    </form>
		</center>
	</fieldset>
</div>
</body>
</html>
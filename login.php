<!DOCTYPE html>
<html>
<head>
	<title>Christian platform login page</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	<div>
	<center>
		<h1><span class="one">CHRIST</span><span class="two">IAN</span> <span class="three">PLATFORM</span></h1>
	</center>
		<fieldset>
		<legend>LOGIN</legend>
		<center>
			<?php
			if(isset($_GET['error'])){
				if($_GET['error']=='email_empty'){
					echo "<b style='color:red' >Email field is empty";
				}
				if($_GET['error']=='password_empty'){
					echo "<b style='color:red' >Password field is empty";
				}
				else if($_GET['error']=='invalid_email'){
					echo "<b style='color:red' >Email entered is inavalid";
				}
				else if($_GET['error']=='invalid_details'){
					echo "<b style='color:red' >Wrong login details";
				}
				
			}
			?>
			<form method="POST" action="login_ver.php">
				<label for="email">Email</label>
			    <input type="text" name="email" placeholder="example@gmail.com"><br><br><br>
			    <label for="password">Password</label>
			    <input type="password" name="password" ><br><br><br>
			    <button type="submit" name="submit">LOGIN</button>
		    </form>
		</center>
	</fieldset>
</div>
</body>
</html>
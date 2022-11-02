<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/fontawesome-free-5.11.2-web/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <fieldset>
    <legend>Contact Us</legend>
	<h1>For inquiries and comments</h1>


    <div align="center">
    	<?php
    	if(isset($_GET["error"])){
    		if($_GET["error"]=="empty"){
    			echo "please provide your email and the message you wish to send";
    		}
    		elseif ($_GET["error"]=="email") {
    			echo "Please provide a valid email";
    		}
    	}

    	?>
	<form action="contactver.php" method="POST">
		<input type="text" name="name" placeholder="please provide your name"><br><br>
		<input type="text" name="email" placeholder="Please enter your Email"><br><br>
		<input type="number" name="tel" placeholder="your mobile number"><br><br>
		<textarea name="mes" cols="50" rows="5" placeholder="enter your message here"></textarea><br>
		<button type="submit" name="submit">Submit</button>

	</form>
</div>
</fieldset>
<div class="footer">
    <b> <p><center>Follow Us</center></p></b>
      <a href="https://web.facebook.com/EasyShop-110781463846185/?modal=admin_todo_tour"><span class="fa fa-facebook fa-lg fa-fw" style="color:mediumblue;" title="Facebook"></span></a>
      <a href="mailto:patrixmwenza@gmail.com"><span class="fa fa-envelope fa-lg fa-fw" style="color:cyan;" title="Email"></span></a>
      <span class="fa fa-youtube fa-lg fa-fw" style="color:red;" title="YouTube"></span>
      <span class="fa fa-twitter fa-lg fa-fw" style="color:dodgerblue;" title="Twitter"></span>
      <span class="fa fa-instagram fa-lg fa-fw" style="color:orange;" title="Instagram"></span>
      <span class="fa fa-linkedin fa-lg fa-fw" style="color:dodgerblue;" title="LinkedIn"></span>
      <span class="fa fa-pagelines fa-lg fa-fw" style="color:cyan;" title="website"></span>
      <span class="fa fa-whatsapp fa-lg fa-fw" style="color:lightgreen;" title="WhatsApp"></span>

    <h3 style="color:black;text-align:center;">&copy2020 Ndackia Solutions</h3>
  </div>

</body>
</html>
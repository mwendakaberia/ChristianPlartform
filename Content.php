<!DOCTYPE html>
<html>
<head>
	<title>Anointing Materials</title>
</head>
<body>
	<?php 
	session_start();
 require_once "db_connection.php";
    if(isset($_GET['message'])){
	$name=$_GET['message'];
	
	$_SESSION['name']=$name;
	// echo($_SESSION['name']);
	

 $name=$_SESSION['name'];

$query = "SELECT * FROM uploads WHERE name='$name';";
$sql=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($sql);
}
if($name==='Video_preaching'||$name=='Video_song'){
	?>
<video width="100%" controls>
<source src="<?php echo $row['location'];?>">
</video>
<?php
}
else if($name==='Audio_preaching'||$name=='Audio_song'){
	?>
	<audio width="100%" controls>
    <source src="<?php echo $row['location'];?>">
    </audio>
<?php
}
else if($name==='Softcopy'){
	// header("Content-type: application/pdf");
	// header('Content-Transfer-Encoding:binary');
	readfile($row['location']);
}
?>
</body>
</html>
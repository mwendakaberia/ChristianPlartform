<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
if(isset($_GET['message'])){
	$name=$_GET['message'];
	
	$_SESSION['name']=$name;
	// echo($_SESSION['name']);
	
}

 ?>

 <form action="Upload.php" method="POST" enctype="multipart/form-data">
        <center>
		<div class="choose"><input type="file" name="file" required></div><br>
		<button type="submit" name="submit">Upload</button>
    </center>

	</form>
<?php
require_once "db_connection.php";

if (isset($_POST['submit'])) {
	$file=$_FILES['file'];
	$filename=$file['name'];
	$fileTmpname=$file['tmp_name'];
	$fileSize=$file['size'];
	$fileError=$file['error'];
	$fileType=$file['type'];
	
	$fileext=explode('.',$filename);
	$fileActualExt=strtolower(end($fileext));

	$allowed = array('jpg','jpeg','png','mp3','mp4','mkv','flv','pdf','txt','ppt','doc','xml');

	if(in_array($fileActualExt, $allowed)){
		if($fileError===0){
			// if($fileSize<10000000000){
				$filenamenew=uniqid('',true).".".$fileActualExt; 
				$filedest='Uploaded/'.$filenamenew;
				move_uploaded_file($fileTmpname, $filedest);

				$name=$_SESSION['name'];
				// echo($name);

                $sql="INSERT INTO `uploads`(`name`, `location`) VALUES ('$name','$filedest') ";
                if(!mysqli_query($con,$sql)){
                	die("error");
		            exit();

		        }  
	
	            else{
	            	echo "logged in successfuly";
	                }
	                session_destroy();
	                session_unset();
		

				header("Location:index.php");

			// }else{
			// 	echo "your image is too big to be downloaded";
			// }

		}else{
			echo "there was an error uploading image";
		}

	}else{
		echo"you cant upload a file of this type";
	}


}
?>
</body>
</html>


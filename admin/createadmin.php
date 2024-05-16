<?php
 include("connection/connection.php");

 if(isset($_POST['SUBMIT']))
 {
 	$fullname=$_POST['fullname'];
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$newpassword=md5($_POST["newpassword"]);
 	$confypass=md5($_POST['confpassword']);
 	$currentDate = date("Y-m-d");

 	if($newpassword!=$confypass)
 	{
 		session_start();
 		$_SESSION['newpassword']=$newpassword;
 		echo "<script>alert('error');</script>";
 		header("Location: add-admin.php");
 	}
 	else
 	{

 	$sql="INSERT INTO admin(FullName, AdminEmail, UserName, PassWord, updationDate) VALUES('$fullname', '$email', '$username', '$newpassword', '$currentDate')";

 // Execute SQL statement
		  if ($conn->query($sql) === TRUE)
		   {
		    echo "New record created successfully";
		    } 
		  else 
		  {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		  }
 	}




 }

?>
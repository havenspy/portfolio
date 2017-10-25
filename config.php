<?php
//Connect to database
$conn= mysqli_connect('localhost', 'root','','spys');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


if(!$conn){
		die("connection failed! ".mysql_connect_error());
	}

$sql = "INSERT INTO contact (name,phone,email,message)
VALUES('$name','$phone','$email','$message')";
//Step5:
if (!mysqli_query($conn, $sql)) {
		echo "Error: ".$sql. "<br>". mysqli_error($conn);
	}
else{
    
            header("Location:home.php");

}
 ?>

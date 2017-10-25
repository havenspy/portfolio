<?php
//Connect to database
$conn= mysqli_connect('localhost', 'root','','spys');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];
$location = $_POST['location'];

if(!$conn){
		die("connection failed! ".mysql_connect_error());
	}

$sql = "INSERT INTO reports  (name,phone,email,title,message,location)
    VALUES ('$name','$phone','$email','$title','$message','$location')";
//Step5:
if (!mysqli_query($conn, $sql)) {
		echo "Error: ".$sql. "<br>". mysqli_error($conn);
	}
else{
    $sql = "SELECT * FROM reports 
				WHERE name = '$name' AND title = '$title';";
    $result = mysqli_query($conn, $sql);

	

	// Test if it returns anything

	if (mysqli_num_rows($result) == 0) {
       
		echo "Case file not found";
	} 
	else {
		 header("Location:report.php");
}
}
 ?>
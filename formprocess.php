<?php
//Connect to database
$conn= mysqli_connect('localhost', 'root','','spys');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$pass_encrypt = hash('ripemd128',$password);

if(!$conn){
		die("connection failed! ".mysql_connect_error());
	}

$sql = "INSERT INTO users (firstname,lastname,address,phone,email,username,password)
VALUES('$firstname','$lastname','$address','$phone','$email','$username','$pass_encrypt')";
//Step5:
if (!mysqli_query($conn, $sql)) {
		echo "Error: ".$sql. "<br>". mysqli_error($conn);
	}
else{
    session_start();

 //store the username in SESSION global variable
  $_SESSION['username']=$username;

 $session=$_SESSION['username'];
            header("Location:home.php");

}
 ?>

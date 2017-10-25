<?php 
	function redirect_to($location, $message = "failed") {
		header("location:".$location."?message=".$message);
		exit;
	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_e = hash("ripemd128", $password);

	if (empty($username)) {
		redirect_to("login.php", "username");
	}
	if (empty($password)){
		redirect_to("login.php", "password");
	}
	

	// connect to database

	$conn = mysqli_connect("localhost", "root", "", "spys");

	// test connection

	if (!$conn) {
		die("connection failed! ".mysqli_connect_error());
	}

	// Extract values from MySQL Database with given values
	// A condition to determine where to source the data
	// since both phone number and username are allowed
	// if doubleval($uname) != 0, it means it's a phone number

	if (doubleval($username) != 0) {
		$username = doubleval($username);
		$sql = "SELECT * FROM users
				WHERE phone = '$phone' AND password ='$password_e';";

		
	} else {
		$sql = "SELECT * FROM users 
				WHERE username = '$username' AND password = '$password_e';";

			
	}	
		


	// To run the SQL query and store in a variable

	$result = mysqli_query($conn, $sql);

	

	// Test if it returns anything

	if (mysqli_num_rows($result) == 0) {
       
		redirect_to("login.php");
	} 
	else {
		 session_start();

 //store the username in SESSION global variable
  $_SESSION['username']=$username;

 $session=$_SESSION['username'];
		redirect_to("home.php", $username);

	}
	
 ?>
<?php 
	function redirect_to($location, $message = "failed") {
		header("location:".$location."?message=".$message);
		exit;
	}

	$title = $_POST['title'];
	
	if (empty($title)) {
		redirect_to("login.php", "title");
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

	
		$sql = "SELECT * FROM reports 
				WHERE title = '$title';";

			

		


	// To run the SQL query and store in a variable

	$result = mysqli_query($conn, $sql);

	

	// Test if it returns anything

	if (mysqli_num_rows($result) == 0) {
       
		echo "Case file does not exist";
	} 
	else {
		 session_start();

 //store the username in SESSION global variable
  $_SESSION['title']=$title;

 $session=$_SESSION['title'];
		redirect_to("casefile.php", $message);
	}
	
 ?>
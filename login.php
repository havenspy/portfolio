
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spy</title>

	<!--=================== BOOTSTRAP LINK ====================================-->

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<!-- ====================== JS LINK ====================================== -->

	<script type="text/javascript" src="validate.js"></script>

	<!-- ============================FONT AWESOME =============================== -->

	<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">




	

</head>
<body class="container">
     <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <!---logo-->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/i.png" width="50" height="50" alt="SPY">
                </a>
            </nav>
            <!---logo ends here-->


            <div class="collapse navbar-collapse container " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white " href="#">Case File
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="report.php">Report Your Case</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white " href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="login.php">Login</a>
                
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
	<div style="padding-left:30px padding-bottom:80px">
		<div id="contact">			
			<h3><strong>Sign in!</strong></h3>
			<?php
	
				// check if message is not NULL; if it's not been sent yet!
				// $message = $_GET['message'];
				if (isset($_GET['message'])) {
					if ($_GET['message'] == 'failed') {
						echo "<h4 class=\"text-danger\">Username or Password is Incorrect!</h4><br>";
					}
					if ($_GET['message'] == "username") {
						echo "<h4 class=\"text-danger\">Username cannot be left empty!</h4><br>";
					}
					if ($_GET['message'] == "password") {
						echo "<h4 class=\"text-danger\">Password cannot be left empty!</h4><br>";
					}
				}
			?>
			<form action="login_check.php" method="post">
				<div>		
					<label for="username">Username or Phone: </label><br>
					<input type="text"  id="username" name="username" onchange="test_d(this)" required>					
					<br>
					<label for="message">Password: </label>	<br>					
					<input type="password" name="password" required>
					<br><br>
					<button type="submit" name="Login">Login </button>
				</div>
			</form>
		</div>

	<script type="text/javascript">
		function test_d (id) {

			if (isNaN(id.value)) {
				validateUName(id);
			} else {
				validatePhone(id);
			}
		}
	</script>
    <p>Not registered yet? <a href='register.php'>Register Here</a></p>
    </div>
    <div style="padding-bottom:150px">
    <p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    <footer id="footer">

        <div> Copyright © 2017 SPY. Developed by Haven Inc.
        </div>

    </footer>
    <script type="text/javascript" src="js/boostrap.min.js"></script>
</body>
</html>
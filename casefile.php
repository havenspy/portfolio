<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">




</head>

<body class='container'>
    <!-- creates a nav bar with default color(menu)-->
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
<form action="case.php" method="post">
            <label>Enter your message title:</label>
           <span style="color:red">*</span><input type="text" name="title" required><br><br>
         <input type="submit" name="submit" Value="Submit">
    </form>
    
    <p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <footer id="footer">

        <div> Copyright © 2017 SPY. Developed by Captcha.
        </div>

    </footer>
    <script type="text/javascript" src="js/boostrap.min.js"></script>


</body>

</html>
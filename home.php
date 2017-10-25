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
    <h4 id="contact" style="float:right">
		<?php
 //start a session
 session_start();

//sore the value of user in session super globals
 $userName=$_SESSION['username'];

//check if userName is empty then redirect to login page
 if(empty($userName))
 {
  //redirect to Login page
  header('Location:login.php');
 }

//else print username with welcome message 
  echo "welcome $userName"; 
 ?>
    </h4>

    <div id="carouselExampleControls" class="carousel slide carousel('cycle')" data-ride="carousel">
        <div class="carousel-inner">


            <div class="carousel-item active">
                <img class="d-block w-100 mao" src="images/shuks.jpg" alt="Third slide">
            </div>
        </div>

    </div>


  div class="row">

        <div class="col-lg-3 margin">

            <div class="card " style="width: 100%; height:100%; font-family: sans-serif;">
                <div class="card-header">
                    <h3>FAQs</h3>
                </div>
                <ul style="color:blue" class="list-group list-group-flush">
                    <details>
                        <summary>Which security agencies work with SPY?</summary>
                        <p>
            As of now, we are working to bring the following security agencies onboard to work with us: Lagos state Police Force, Lagos State Emergency Management Agency (LASEMA), National Emergency Management Agency (NEMA), Lagos State fire service. 
        </p>
                    </details><br>
                    <details>
                        <summary>How do I know my cases are being treated with urgency and competence?</summary>
                        <p>
           <p>The status bars in the casefile peculiar to each case indicate the status of the case as either pending, recieved and recieving attention</p> 
                    </details><br>
                         <details>
                        <summary>Who receives my reported case?</summary>
                        <p>
           <p> The Lagos state police will receive the information and act immediately or forward it to the appropriate agency that can provide the required aid</p> 
                    </details><br>
                    <details>
                        <summary>Are my case entrees private?</summary>
                        <p>
           <p> Yes, your entrees are private and accessible only to you in your casefile and to the security agency recieving the filed case</p> 
                    </details><br>
                    <details>
                        <summary>Who is the haven?</summary>
                        <p>
           <p>The Haven is an Incorpoation that targets the Security sector of the economy with the aim of using technology to develop softwares and innovative solutions to security challenges and also to put preventive measures in place in order to improve the quality of security in the nation.</p> 
                    </details><br>
                    <details>
                        <summary>Which parts of Nigeria is spy active in?</summary>
                        <p>
           <p>Lagos State only at the moment</p> 
                    </details><br>
                    <details>
                        <summary>Does SPY have an headquarter?</summary>
                        <p>
           <p>No, SPY does not have an headquarter</p> 
                    </details><br>
                    <details>
                        <summary>How will spy help me?</summary>
                        <p>
           <p>SPY will put help from security agencies at your fingertips and help you go about your activities with bolstered confidence knowing that with professional help is just some clicks away no matter the situation or the location.</p> 
                    </details>
                    
                </ul>
            </div></div>



        <div class="col-lg-6">
            <div class="h1" style=" background-color: #ffc;">
                <h3 style="color:red; "> IN AN EMERGENCY?
                    <br>CALL 112 OR 767
                </h3>
            </div>

            <div class="h3" style=" background-color: #ffc;">
                <h3 id="report">
                    <a href="report.php" style="color:red; background: #ffc;">REPORT A CASE</a>
                </h3>
            </div>


        </div>


        <div class="col-lg-3 margin">

            <div class="card" style="width: 100%; font-family: sans-serif;">
                <div class="card-header">
                    <h3>Announcements</h3>
                </div>
                <ul class="list-group list-group-flush" style="color:blue">
                    
                        <li class="list-group-item">A black landcruiser prado with plate number AH412BV was stolen in Ikosi, if found or seen, please
                            call 09076543212 </li>
                        <li class="list-group-item">SPY ranked Nigeria's leading, widely used and best security Application for year 2018</li>
                  
                        <li class="list-group-item">Nigeria Police Force just despatched a squad of policemen to Kogi state to contain the rebellious
                            acts of some youths in the capital. </li>
                   
                        <li class="list-group-item">SPY has expanded its operational base to Oyo state and Ogun state</li>
                </ul>
            </div>
        </div>

        <p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <a style="float:right" href="logout.php">Logout</a>


    <footer id="footer">

        <div> Copyright © 2017 SPY. Developed by Haven Inc.
        </div>

    </footer>
    <script type="text/javascript" src="js/boostrap.min.js"></script>


</body>

</html>
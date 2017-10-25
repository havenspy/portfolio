<?php
session_start($_SESSION['username'] = $username);
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
else{
    header("Location: index.php");
}
?>
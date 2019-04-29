<?php
//logout.php
session_start();

session_destroy();
unset($_SESSION['signInUserName']);
	unset($_SESSION['signUpUserName']);

header("location:homepage.php");

?>
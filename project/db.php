<?php

session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';


$link = mysqli_connect($host, $user, $password, $db);

$username = "";
$email = "";
$password = "";
$first_name = "";
$last_name = "";

//errors messages;
$first_name_error = "";
$last_name_error = "";
$password_error = "";
$email_error = "";
$username_error = "";
$usernameExists_error = "";
$emailExists_error = "";
$confirm_password_error="";

if(isset($_POST['signupbutton'])){
	$username=$_POST['signUpUserName'];
	$first_name=$_POST['firstName'];
	$last_name=$_POST['lastName'];
	$email=$_POST['email'];
	$password1=$_POST['signUpPassword'];
	$password2=$_POST['confirmPassword'];


	if(empty($first_name)){
		//array_push($errors, "First name is required");
		$first_name_error = "First name is required";
	}
	if(empty($last_name)){
		//array_push($errors, "Last name is required");
		$last_name_error = "Last name is required";
	}
	if(empty($username)){
		//array_push($errors, "Username is required");
		$username_error = "Username name is required";
	}
	if(empty($email)){
		//array_push($errors, "Email is required");
		$email_error = "Email is required";
	}
	if(empty($password1)){
		//array_push($errors, "Password is required");
		$password_error = "Password is required";
	}
	if($password1!=$password2)
	{
		//array_push($errors, "two password dont matched!!");
		$confirm_password_error = "two password dont matched!!";
	}

	$usernameCheck = "Select * From p_registration Where username = '$username'";
	$emailCheck = "Select * From p_registration Where email = '$email'";

	if(mysqli_num_rows(mysqli_query($link, $usernameCheck)) > 0){
		$usernameExists_error = "This username is already taken";
	}


	else if(mysqli_num_rows(mysqli_query($link, $emailCheck)) > 0){
		$emailExists_error = "Already registered";
	}


	else if(count($errors) == 0){
		//$password = md5($password);
		$sql = "Insert Into p_registration(username, first_name, last_name, email, password)
							   Values('$username', '$first_name', '$last_name', '$email', '$password1')";

		mysqli_query($link, $sql);
		//header("location:HOMEPAGE.html");
		$_SESSION['signUpUserName'] = $username;
		//$_SESSION['success'] = "You are now logged in";
		header('location: login_patient.php');
	}
}

// LOGIN patient
if (isset($_POST['login_pateint'])) {

  $username=$_POST['signInUserName'];
   $password=$_POST['signInPassword'];
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM p_registration  WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($link, $query);

  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['signInUserName'] = $username;

  	  header('location: homepage_with_login.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>

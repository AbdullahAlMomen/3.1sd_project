<?php
 //session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';

$link = mysqli_connect($host, $user, $password, $db);

$name = "";
$email = "";
$password = "";
$contactNO="";
$Address="";
$gender="";
$blood_group="";

//errors messages;
$password_error = "";
$email_error = "";
$name_error = "";
$nameExists_error = "";
$emailExists_error = "";
$confirm_password_error="";
$blood_group_error="";
$gender_error="";
$Address_error ="";
$contactNO_error ="";

if(isset($_POST['signupbutton'])){
	$name=$_POST['signUpName'];

	$gender=$_POST['gender'];
		$blood_group=$_POST['blood_group'];
			$contactNO=$_POST['contactNO'];
			$Address=$_POST['Address'];
	$email=$_POST['email'];

	$password1=$_POST['signUpPassword'];
	$password2=$_POST['confirmPassword'];




	if(empty($name)){
		//array_push($errors, "Username is required");
		$name_error = "Name is required";
	}
	if(empty($email)){
		//array_push($errors, "Email is required");
		$email_error = "Email is required";
	}
	if(empty($password1)){
		//array_push($errors, "Password is required");
		$password_error = "Password is required";
	}
	if(empty($blood_group_error)){
		//array_push($errors, "Password is required");
		$blood_group_error= "what is your blood group??";
	}
	if(empty($contactNO)){
		//array_push($errors, "Password is required");
		$contactNO_error = "Contact-No is required";
	}
	if(empty($Address)){
		//array_push($errors, "Password is required");
		$Address_error = "Address is required";
	}
	if($password1!=$password2)
	{
		//array_push($errors, "two password dont matched!!");
		$confirm_password_error = "two password dont matched!!";
	}

	$nameCheck = "Select * From donor Where d_name = '$name'";
	$emailCheck = "Select * From donor Where email = '$email'";

	if(mysqli_num_rows(mysqli_query($link, $nameCheck)) > 0){
		$nameExists_error = "This name is already taken";
	}

	// else if(mysqli_num_rows(mysqli_query($link, $emailCheck)) > 0){
	// 	$emailExists_error = "This email already registered";
	// }

	else if(count($errors) == 0){
		//$password = md5($password);
		$sql = "Insert Into donor(d_name, email, password,contact,gender,adress,blood_group,confirm_password)
							   Values('$name', '$email', '$password1','$contactNO','$gender','$Address','$blood_group','$password2')";

		mysqli_query($link, $sql);
		//header("location:HOMEPAGE.html");
		$_SESSION['signUpName'] = $name;
		//$_SESSION['success'] = "You are now logged in";
		header('location: thankyou.php');
	}
}

// // LOGIN doctor
// if (isset($_POST['login_doctor'])) {
//
//   $username=$_POST['signInUserName'];
//    $password=$_POST['signInPassword'];
//   if (empty($username)) {
//   	array_push($errors, "Username is required");
//   }
//   if (empty($password)) {
//   	array_push($errors, "Password is required");
//   }
//
//   if (count($errors) == 0) {
//   	//$password = md5($password);
//   	$query = "SELECT * FROM d_registration  WHERE username='$username' AND password='$password'";
//   	$results = mysqli_query($link, $query);
//
//   	if (mysqli_num_rows($results) == 1) {
//   	  $_SESSION['signInUserName'] = $username;
//
//   	  header('location: homepage.php');
//   	}else {
//   		array_push($errors, "Wrong username/password combination");
//   	}
//   }
// }

?>

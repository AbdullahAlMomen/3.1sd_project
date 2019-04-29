<?include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctors 24/7</title>
    <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/login_signin.css" rel="stylesheet"/>
</head>
<body class="logSignBackground">

<div class="container">
	<div class="col-md-3 col-sm-2 col-xs-0"></div>
	<div class="col-md-6 col-sm-8 col-xs-12">
		<form method="post" action="registration.php" class="signUpContainer">
		<!--	<?php include('registrationerrors.php'); ?> -->
			<div class="signUp">Sign Up</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					  <input type="singUpFirstName" class="form-control" id="signUpFirstName" placeholder="FirstName" name="firstName">
					  <div><label style="color: white"><?php echo $first_name_error; ?></label></div>
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
  					 <input type="signUpLastName" class="form-control" id="signUpLastName" placeholder="LastName" name="lastName">
					 <div><label style="color: white"><?php echo $last_name_error; ?></label></div>
					</div>
				</div>
			</div>

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="signUpUserName" type="text" class="form-control" placeholder="Username" name="signUpUserName" value="<?php echo $usernameExists_error?>">
			</div>
			<div><label style="color: white"><?php echo $username_error; ?></label></div>
	<!--		<div><label style="color: white"><?php echo $usernameExists_error; ?></label></div> -->

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input id="email" type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $emailExists_error ?>">
			</div>
			<div><label style="color: white"><?php echo $email_error; ?></label></div>
		<!--	<div><label style="color: white"><?php echo $emailExists_error; ?></label></div> -->

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="signUpPassword" type="password" class="form-control" placeholder="Password" name="signUpPassword">
			</div>
			<div><label style="color: white"><?php echo $password_error; ?></label></div>
			<div class="checkbox">
			  <label class="textInLogSign"><input type="checkbox" name="remember"> Remember me</label>
			</div>
			<button type="submit" name="signupbutton" class="btn btn-primary btn-block">Sign Up</button>
			<br>
			<div class="textCen textInLogSign">Already have account? <a href="login.html"role="button" class="btn btn-info">Log in</a></div>
		</form>

	</div>
	<div class="col-md-3 col-sm-2 col-xs-0"></div>
</div>

</body>
</html>

<?php //include('db.php');

session_start();
$flag="";

if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Doctors 24/7 </title>
    <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/contact.css" rel="stylesheet"/>

</head>
<body>
 <?php
 include'header.php'
 ?>



<div class="contact-manage"><!-- first div ta height thik korar jonno-->
<div class="row contact-background"> <!-- 2nd div ta image add  korar jonno-->
  <div class="container">
    <h1 class="font-weight-bold"> CONTACT US</h1>
    <h4>PHONE:088-329742</h4>
    <h4>EMAIL:doctor24/7@gmail.com</h4>
  </div>
</div>
</div>
<!--  contact background ends here -->
<div class="middle">

</div>
<div class="contact-form">
<div class="container">
  <div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<form action="/action_page.php">

		  <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="signInUserName" type="text" class="form-control" name="signInUserName" placeholder="Enter username">
		  </div>
		  <br>
		  <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input id="email" type="text" class="form-control" name="email" placeholder="Email">
		  </div>
		  <br>
		  <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				<input id="email" type="text" class="form-control" name="phone" placeholder="Phone">
		  </div>
		  <br>
      <div class="input-group">
            <label for="inputsm">Message:</label>
                <textarea name="name" rows="6" cols="80" class="form-control"></textarea>
          </div>
          <br>
		  <button type="submit" class="btn btn-primary btn-block">Submit Your Massage</button>
		</form>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="midAlign">
			<h3>Comments?</h3>
			<h3>Suggestions?</h3>
			<h3>Want to get in touch?</h3>
		</div>
		<div class="divider"></div>
		<div class="description">

		  <p class="lead">
		  We are available for home visits 7 days a week from 8 a.m. to 7 p.m.
		  Call (718) 238-2100, Monday – Friday, 8am – 6pm, for more information.
		  A medical professional is on call 24 hours a day, 7 days a week, should you need any urgent medical advice.
		  We do not treat chest pain, shortness of breath, or head injuries with loss of consciousness.
		  These symptoms may indicate a very serious condition requiring immediate care in a hospital.
		  In the event of a life-threatening medical emergency, please call medical emergency services at 911 immediately.
		  </p>
		  <p class="lead">Administrative Office:
			6010 Tejgaon 9th Floor, Dhaka
			Fax: (718) 748.0863
		  </p>
		</div>
	</div>

  </div>
</div>
<div class = "map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.329279691334!2d90.3706905900297!3d23.7637363904897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75f68e3e199%3A0x1091c4aa2634b568!2sTejgaon%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1534371723694"
  width="1350" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</div>

<?php include 'footer.php' ?>

</body>
</html>

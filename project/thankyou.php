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

<div class="row" style="height:600px;">
  <div class="col-md-3">
  </div><div class="col-md-6">
    <p class="margin2 text-center sp_font_family sp_font_with_size" style="color:#27A4E0; font-size: 20px; font-weight:bold;">Thank You.</p>
    <center><p class="doc_name doc_name_13 grey_font_color" style="color:black;  font-size: 20px; font-weight:bold;">Your registration as a blood donor completed successfully. We'll contact you shortly.</p>
    </center>
    <center><p class="doc_name doc_name_13 grey_font_color" style="color:black;  font-size: 20px; font-weight:bold;>No need to take any further action.</p>
    </center>

  </div>
  <div class="col-md-3"></div>
</div>

<?php include 'footer.php' ?>

</body>
</html>

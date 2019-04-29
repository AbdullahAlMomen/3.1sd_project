<?php //include('db.php');

session_start();
$flag="";

if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');
}


?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors 24/7</title>
  <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/healthcard.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 <?php
 include'header.php'
 ?>



  <div class="hc-manage"><!-- first div ta height thik korar jonno-->
  <div class="hc-background"> <!-- 2nd div ta image add  korar jonno-->
    <div class="container">
      <h1 id="hc" class="text"> HEALTH CARDS</h1>
    </div>
  </div>
  </div>
	<div class = "mid">
  <div class="container">

<h2 class="text"><strong> What is a Health Card?</strong> </h2>
<p style="text-align: justify;">We live in a busy world where every day we have a new deadline to chase and a new target to fulfill.
  In such busy times, our health is often neglected until in most cases it is a bit too late
  but what if we told you that this does not have to be the case. You can every day go out into the world fulfill your dreams
  and at the same time keep your health secure.</p>


  <p style="text-align: justify;">&nbsp;As the whole world is moving towards technology to make life easier for every individual
    and those around we have come up with a new electronic card which is almost the same size as the credit or debit card.
     This is the next device which will help in shaping the future of the health care system. <br> <br>
     </p>
<h4 class="text"><strong>How does the card work?</strong></h4>
<p style="text-align: justify;">
  1) User will be given a unique login ID to access the card it will only be accessed by the user,
  no one else and the user has to share it with the doctor when getting medically treated.</p>
<p style="text-align: justify;">2) The card can be accessed anywhere in the world 24/7.</p>
<p style="text-align: justify;">3) The card will contain user’s entire medical history that will include blood group,
  previous treatment, allergies and other medical prescription.</p>
  <p style="text-align: justify;">4) We are also doing our part to save the environment by going paperless.</p>
  <p style="text-align: justify;">5) In the case of an emergency, all emergency contact numbers are listed and saved.</p>
<p style="text-align: justify;">6) User will automatically get a reminder for vaccination,
   medical appointment, doctor’s appointment or any other treatment plan.</p>
<p style="text-align: justify;">7) User’s lab and test reports will be automatically updated. <br> <br>
</p>
  <h4 class="text"><strong>Why do we need the health card?</strong></h4>
<p style="text-align: justify;">Nowadays many times people forget to carry their medical reports with them which cause unintentional medical delays. Since it is a necessity for doctors to have all of the patient’s medical record, it is easily available as it is stored in the health card. Till date, all our medical records are stored in the hospital computer which makes it inaccessible for the users
but with the help of the health card the user will have more knowledge about her health.</p>
<p style="text-align: justify;">Users will also be sent constant reminders of their scheduled doctor’s appointments and follow ups.</p>
In case the user is not satisfied with the treatment they can always get a second opinion from experts by uploading their reports online
and since everything is saved digitally no doctor can go for medical trials on a patient.
<p style="text-align: justify;"><br>Lastly, it is a free facility provided to everyone.</p>

<a style="margin-bottom:10px" href="#" class="btn btn-primary">Build Your Health Card Now</a>

</div>
</div>

<?php include 'footer.php' ?>

</body>
</html>

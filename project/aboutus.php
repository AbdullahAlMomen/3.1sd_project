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
  <title>Doctors 24/7</title>
  <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/aboutus.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>

<?php
include 'header.php'
?>

  <div class="aboutus-manage">
      <!-- first div ta height thik korar jonno-->
  <div class="aboutus_background">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <h1 id = "about">ABOUT US</h1>
        </div>
          <div class="col-md-6"></div>
      </div>


    </div>

                <!-- 2nd div ta image add  korar jonno-->

  </div>
  </div>
  <div class="second-part">
  <div class="container">
    <div class="row1">
      <h2 id="co">About Us</h2>
      <hr>
      <p>The world of internet is full of various healthcare platforms where
        some are offering online doctors’ appointments, medicines, online expert consultation, emergency services and some are offering medical tourism facilities.
        But have you ever visited a platform where you can find all these services?
        Obviously NO! You need to find different platforms for different problems.
        Having understood the need of the hour, we have come up with a single solution for all your healthcare requirements.
      </p>
      <br>
      <p>Welcome to Suvidha Care, World’s only online healthcare portal where you will find all your healthcare services at one stop!
        Unbelievable but true! Now you need not search here and there or different online platforms for your varying requirements.
        Yes! Name any healthcare service and you will find it here at ‘Doctor24/7’
      </p>
      <br>

    </div>
    <div class="row2">
      <h2 id="co">Company Introduction</h2>
      <hr>
      <br>
      <p>
    Doctor24/7 is an IT Start-Up offering integrated online and telephone based personal healthcare services.
 Being a pole star among the crowded constellation of online healthcare services providers around the globe,
Doctor24/7 is like a consortium of expert surgeons, physicians, physiotherapists, dentists and so on.

      </p>
      <br>
      <p>
        Having a team of expert IT professionals and dedicated management officials ‘Doctor24/7’ is an online portal dedicated to deliver quality services in healthcare sector,
 including doctor online appointment booking, online Lab test booking and
facilities for international patients and medical tourists with an e-commerce section consisting of online medicine sale.
      </p>
      <br>
      <p>
        Our IT experts and the leadership team, having a vast experience of working in renowned multinational organizations, have developed a tangible combination of healthcare, technology,
and business tactics across healthcare industry. We have inculcated a strong network of medical experts, health specialists, healthcare providers, and
partners who are committed to avail 24x7 health consultations either by phone or online.
      </p>


    </div>
    <div class="row3">
      <h2 id="co">Our Mission</h2>
      <hr>
      <h3 id="co">Our Core Values Include:</h3>
      <ul>
<li> Focus on prevention and clinical excellence</li>
<li>Collaboration with all health care professionals, Certified Home Health Agencies, and Caregivers</li>
<li>Performance consistency and quality assurance</li>
<li>Highest ethical standards</li>
<li>Superior service and communication</li>
      </ul>
      <br>
      <h3 id="co">We serve:</h3>
      <ul>
        <li>Patients medically homebound for any reason</li>
        <li>Caregivers</li>
        <li>Certified Home Health Agencies</li>
        <li>Managed Care Organizations</li>
        <li>Physicians</li>
        <li>Community Agencies</li>
        <li>Hospitals</li>
        <li>Senior Centers</li>
        <li>Licensed Home Care Service Agencies</li>
      </ul>
    </div>
  </div>

  </div>

  <?php include 'footer.php' ?>


</body>
</html>

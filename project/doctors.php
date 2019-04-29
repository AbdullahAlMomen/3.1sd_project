<?php //include('db.php');

session_start();
$flag="";

if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');
}
if(!isset($_SESSION['signInUserName'])){
	header('location: homepage.php');
}


?>
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
  <link href="css/doctors.css" rel="stylesheet"/> </link>

  </link>
</head>
<body>

  <?php
  include 'header.php'
  ?>
<h1 class="text-center white_font floating_text site_heading hidden-xs" id="scroll_to" style="color:#27A4E0;">Find Your Doctor</h1>
  <div class="search">

<div class="row">
  <div class="container">
  <form action="search.php" method="GET">
  <div class = "col-md-5">
      <input id="city_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search by Doctor name" autocomplete="off" name="username">

  </div>
  <div class = "col-md-5">
   <input id="sp_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder=" specialty." autocomplete="off" name="specialty">
  </div>
  <div class = "col-md-2">
    <button class="col-md-6 btn submit_btn btn-block" type="submit" style="width:110%;text-align:center" name="search_button">
      <span class="glyphicon glyphicon-search search-bar-icon"></span></button>
  </div>
</div>
</form>

</div>
</div>

<section class="doctor-list-wrap">
<div class="container" id= "doc_dept">
<div class="row">


        <div class="col-sm-3 col-lg-2"> <a href="doctor_profiles.php" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon3.png" alt=""><br>
        <span>Ayurvedic Doctor</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon4.png" alt=""><br>
        <span>Cardiologists</span> </a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon15.png" alt=""><br>
        <span>ENT Surgeon</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon9.png" alt=""><br>
        <span>Dentists</span> </a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon10.png" alt=""><br>
        <span>Dermatologists</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon12.png" alt=""><br>
        <span>Dietitians</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon19.png" alt=""><br>
        <span>General Physician</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon26.png" alt=""><br>
        <span>Homeopathic Doctors</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon35.png" alt=""><br>
        <span>Neurologist</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon39.png" alt=""><br>
        <span>Oncologists</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon40.png" alt=""><br>
        <span>Ophthalmologists</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon47.png" alt=""><br>
        <span>Pediatricians</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon49.png" alt=""><br>
        <span>Physiotherapist</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon51.png" alt=""><br>
        <span>Psychiatrists</span></a> </div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon60.png" alt=""><br>
        <span>Thyroid Doctors</span></a></div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon64.png" alt=""><br>
        <span>Urologists</span></a></div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon65.png" alt=""><br>
        <span>Veterinarian</span></a></div>

        <div class="col-sm-3 col-lg-2"> <a href="#" class="docs doctor-thumb"> <img src="https://www.suvidhacare.com/front/images/doctor-icon21.png" alt=""><br>
        <span>Gynaecologists</span></a></div>

    </div>
        </div>
      </section>
  <?php include 'footer.php' ?>

  </body>
  </html>

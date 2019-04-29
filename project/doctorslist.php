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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/doctors_list.css" rel="stylesheet"/>



</head>
<body>
  <?php
  include 'header.php'
  ?>

  <div class = "container">
    <div class="search_bar">
  <div class="row">
    <div class="container">
    <div class = "col-md-5">
        <input id="city_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search Location." autocomplete="off">
    </div>
    <div class = "col-md-5">
    <input id="sp_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search by Doctor name, specialty." autocomplete="off">
    </div>
    <div class = "col-md-2">
      <button class="col-md-6 btn submit_btn btn-block" type="submit" style="width:110%;text-align:center">
        <span class="glyphicon glyphicon-search search-bar-icon"></span></button>
    </div>
  </div>
  </div>
  </div>
<div class = "container">
<div class="col-lg-12 col-sm-12 doctor_result_div">
  <div class="row">
    <div class="col-lg-4 col-sm-4 doctor_search_left_block">
      <!-----doc pic block-------->
      <img class="img-circle search_page_doctor_image pull-right" src="images/female_doc.jpg" alt="profile pic">
    </div>
    <div class="col-lg-4 col-sm-4 doctor_search_mid_block">
      <!-----doc mid block-------->
      <p class="search_page_doctor_name grey_font_color" style="font-size: 22px; font-weight : bold;">Asst. Prof. Dr. Mst. Sufia Akhter</p>
      <p class="search_page_doctor_des grey_font_color small_font">
        MBBS, DCH, MCPS, MD (Cardiology).</p>
        <p class="search_page_doctor_sp grey_font_color small_font">
          Assistant Professor, Dept. of Pediatric Cardiology, National Institute of Cardiovascular Diseases Hospital (NICVD)</p>
        </div>
        <div class="col-lg-4 col-sm-4 doctor_search_right_block">
          <!-----doc right block-------->
          <div class="row right_block_row">
            <div class="col-lg-9 col-sm-9">
              <p class="grey_font_color small_font">
                <i class="fa fa-map-marker" aria-hidden="true">
                </i>&nbsp;&nbsp; Chamber</p>
                <p class="small_font grey_font_color">
                  <span>Trauma Center Diagnostic &amp; Consultation, Main Br., </span>
                  Shyamoli, Dhaka</p>
                  <p class="small_font grey_font_color">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    &nbsp;&nbsp; Fees</p>
                    <p class="small_font grey_font_color">New appointment: 600 TK.</p>
                  </div>
                    </div>
                 </div>
                    </div>

                                      <div class="col-md-12 ">
                                         <div class="col-md-3">
                                             </div>

                                       <div class="col-md-2 info_btn">
                                        <a href="javascript:;" class="btn btn-primary search-list-btn call_button" data-id="2352"><i class="fa fa-phone"></i> Call Now</a>

                                       </div>

                                       <div class="col-md-2 info_btn">
                                        <a href="javascript:;" class="btn btn-primary search-list-btn consult_button" data-id="2352"><i class="fa fa-envelope"></i> Message Now</a>
                                       </div>

                                       <div class="col-md-2 info_btn">
                                          <a href="javascript:;" class="btn btn-primary search-list-btn book_button" data-id="2352"><i class="fa fa-calendar"></i> Book Appointment</a>
                                                         </div>
                                                          <div class="col-md-3">
                                                             </div>
                                    </div>




                  </div>






  </div>


  <?php include 'footer.php' ?>





</body>
</html>

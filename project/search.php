<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';

$doctor_name = "";


if(isset ($_POST['search_button']))
{
$username=($_POST['username']);
//echo $username;
$speciality=($_POST['specialty']);
$link = mysqli_connect($host, $user, $password, $db);


$sql = "select* from d_registration where username='$username'and speciality='$speciality'";
$result=mysqli_query($link, $sql);
  while($row=mysqli_fetch_row($result))
 {
	$first_Name=$row[2];
    $last_Name=$row[3];
    $email=$row[4];
   // $speciality=$row[7];
    $contactNO=$row[6];
    $Address=$row[8];
    $designation=$row[9];
    $Fees=$row[10];
 }
 if(mysqli_num_rows($result)!=1)
 {
	 die("This doctor could not be found");
 }




}
else die("You need to specify username and speciality");
?>

<?php

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

<div class="col-lg-12 col-sm-12 doctor_result_div">
  <div class="row">
    <div class="col-lg-4 col-sm-4 doctor_search_left_block">
      <!-----doc pic block-------->
      <img class="img-circle search_page_doctor_image pull-right" src="images/female_doc.jpg" alt="profile pic">
    </div>
    <div class="col-lg-4 col-sm-4 doctor_search_mid_block">
      <!-----doc mid block-------->
      <p class="search_page_doctor_name grey_font_color" style="font-size: 22px; font-weight : bold;"> Dr. <label><?php echo $username; ?></label></p>
      <p class="search_page_doctor_des grey_font_color small_font">
        <?php echo $designation; ?>
        <p class="search_page_doctor_sp grey_font_color small_font">
	         <?php echo $speciality; ?></p>
      </p>
        </div>



        <div class="col-lg-4 col-sm-4 doctor_search_right_block">
          <!-----doc right block-------->
          <div class="row right_block_row">
            <div class="col-lg-9 col-sm-9">
              <p class="grey_font_color small_font">
                <i class="fa fa-map-marker" aria-hidden="true">
                </i>&nbsp;&nbsp; Chamber</p>
                <p class="small_font grey_font_color">
                  <span><?php echo $Address; ?> </span>

				  </p>
                  <p class="small_font grey_font_color">
                    <i class="fa fa-money" aria-hidden="true"></i>

                    </p>
                    <p class="small_font grey_font_color">New appointment: <?php echo $Fees ?></p>
                  </div>
                    </div>
                 </div>
                    </div>

                  <div class="col-md-12 ">
                       <div class="col-md-3">
                           </div>

                <div class="col-md-2 info_btn">
                    <button href="javascript:;" id="call" class="btn btn-primary search-list-btn call_button" data-id="2352"><i class="fa fa-phone"></i>Call Now</button>

                    </div>
                    <!-- // echo"<hr>";echo"<br>";
                   // echo"<br>";echo"<br>"; -->



                 <div class="col-md-2 info_btn">
              <button href="javascript:;" id="message" class="btn btn-primary search-list-btn consult_button" data-id="2352"><i class="fa fa-envelope"></i> Message Now</button>
                    </div>

                     <div class="col-md-2 info_btn">
                        <a href="javascript:;" class="btn btn-primary search-list-btn book_button" data-id="2352"><i class="fa fa-calendar"></i> Book Appointment</a>
                                       </div>
                                        <div class="col-md-3">
                                           </div>

                  </div>

                  <div class="call">
                      <div class="show-phonenumber">
                        <div class="phone_and_ext">
                          <span class="phone-change-color"> <i class="fa fa-phone"> </i> </span> <span class="phone"><a href=""><?php echo $contactNO; ?></a></span> <br>
                 	</div>
                        </div>
                    </div>

                      <div class="message">
                          	<div class="show-phonenumber">
                          <div class="phone_and_ext">
                                	<span class="phone-change-color"> <i class="fa fa-envelope"> </i> </span> <span class="phone"><a href=""><?php echo $email; ?></a></span> <br>

                              </div>
                          	</div>
          	</div>

</div>

</div>

<script>


$(document).ready(function(e){
$("#call").click(function(){
        $(".call").toggle(1000);
  });
          });

  $(document).ready(function(e){
      $("#message").click(function(){
            $(".message").toggle(1000);
          });
      });


    </script>
  <?php include 'footer.php' ?>





</body>
</html>

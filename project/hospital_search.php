<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';

$h_name = "";
$spec1= "";
$spec2= "";
$spec3= "";
$contact = "";
$location = "";


if(isset ($_POST['hospitalSearch']))
{
$h_name=($_POST['h_name']);
//echo $username;
// $spec1=($_POST['spec1']);
$location=($_POST['location']);
// $speciality2=($_POST['spec2']);
// $speciality3=($_POST['spec3']);
$link = mysqli_connect($host, $user, $password, $db);


$sql = "select* from hospital where h_name='$h_name' and location='$location'";
$result=mysqli_query($link, $sql);
  while($row=mysqli_fetch_row($result))
 {
	$h_name=$row[1];
    $location=$row[2];
    // $email=$row[4];
   // $speciality=$row[7];
    $contact=$row[3];
     $spec1=$row[4];
      $spec2=$row[5];
       $spec3=$row[6];
    // $designation=$row[9];
    // $Fees=$row[10];
 }
 if(mysqli_num_rows($result)!=1)
 {
	 die("This hospital could not be found");
 }




}
else die("You need to specify the hospital name and speciality");
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



  <!-- <div class = "container">
<div class="search_bar">
 <div class="row">
   <div class="container">
   <div class = "col-md-5">
       <input id="city_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search Location." autocomplete="off" name="h_name">
  </div>
   <div class = "col-md-5">
   <input id="sp_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search by Hospital name, specialty." autocomplete="off" name="spec1">
 </div>
   <div class = "col-md-2">
     <button class="col-md-6 btn submit_btn btn-block" type="submit" name="hospital_search" style="width:110%;text-align:center">
       <span class="glyphicon glyphicon-search search-bar-icon"></span></button>
   </div>
 </div>
 </div>
</div>
     </div> -->
     <!-- <br>";echo"<br>"; -->
     <div class = "container">
         <div class="col-lg-12 col-sm-12 doctor_result_div">
       <div class="row">
            <div class="col-lg-4 col-sm-4 doctor_search_left_block">
        <!-----doc pic block-------->
          <img class="img-circle search_page_doctor_image" src="images/hospital.jpg" alt="profile pic">
           </div>
          <div class="col-lg-4 col-sm-4 doctor_search_mid_block">
              <!-----doc mid block-------->
             <p class="search_page_hospital_name" style="font-size: 22px; font-weight : bold;"><label><?php echo $h_name; ?></label></p></p>
         <ul style="margin-bottom: 0px !important; padding-left: 12px;">
            <li title="<?php echo $spec1; ?>" style="font-size: 14px;">
            <?php echo $spec1; ?> </li>
           <li title="<?php echo $spec2; ?>" style="font-size: 14px;">
               <?php echo $spec2; ?></li>
            <li title="<?php echo $spec3; ?>" style="font-size: 14px;">
                   <?php echo $spec3; ?></li>
                 </ul>
                   </div>
                  <div class="col-lg-4 col-sm-4 doctor_search_right_block">
                  <!-----doc right block-------->
                     <div class="row right_block_row">
                      <div class="col-lg-9 col-sm-9">
                        <p class="para">
                         <i class="fa fa-map-marker" aria-hidden="true">
                        </i>&nbsp;&nbsp; Location </p>
                          <p class="para1"><?php echo $location; ?></p>
                          <p class="para"
                           <i class="fa fa-phone" aria-hidden="true">
                          </i>&nbsp;&nbsp; Contact No. </p>
                            <p class="para1"> <?php echo $contact; ?></p>

                         </div>
                             </div>
                       </div>
                          </div>
         </div>

   </div>


  <?php include 'footer.php' ?>





</body>
</html>

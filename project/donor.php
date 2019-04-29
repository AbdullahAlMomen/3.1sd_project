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

 <link rel="stylesheet" href="css/donor.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include'header.php'  ?>

  <!-- echo"<br>";echo"<br>"; -->
			<a href="donor_registration.php" class="btn btn-info btn-sm" id="donor" role="button" name="donorSignUp">SignUp for Blood Donor</a>

    <div class = "container">
				<form action="donor_search.php" method="POST">
					<?php include('donor_registration_errors.php');?>
  <div class="search_bar">
   <div class="row">
     <div class="container">
     <div class = "col-md-5">
         <input id="city_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search by Location." autocomplete="off" name="location">
    </div>
     <div class = "col-md-5">
     <input id="sp_suggestion" type="text" class="col-md-6 form-control form_input ui-autocomplete-input" placeholder="Search by blood group." autocomplete="off" name="blood_group">
   </div>
     <div class = "col-md-2">
       <button class="col-md-6 btn submit_btn btn-block" type="submit" name="bloodGroupSearch" style="width:110%;text-align:center">
         <span class="glyphicon glyphicon-search search-bar-icon"></span></button>
     </div>
   </div>
   </div>
 </div>
</form>
       </div>

  <?php
  //session_start();
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $errors=array();
  $db = 'project';

  		$link = mysqli_connect($host, $user, $password, $db);


  		$sql = "select* from donor";

  		$result=mysqli_query($link, $sql);
  		//$row=mysqli_fetch_row($result);
  		while($row=mysqli_fetch_assoc($result))
  		{


echo"<br>";echo"<br>";
echo'   <div class = "container"> ';
  echo' <div class="col-lg-12 col-sm-12 doctor_result_div"> ';
echo'     <div class="row"> ';
    echo'   <div class="col-lg-4 col-sm-4 doctor_search_left_block"> ';
  // <!-----doc pic block-------->
    echo'     <img class="img-circle search_page_doctor_image" src="images/donor.png" alt="profile pic"> ';
  echo'     </div> ';
    echo'   <div class="col-lg-4 col-sm-4 doctor_search_mid_block"> ';
        // <!-----doc mid block-------->
  echo'       <p class="search_page_donor_name" style="font-size: 22px; font-weight : bold;">'.$row['d_name'].'</p> ';
    echo'       <p class="search_page_donor_blood_group" style="font-size: 16px;"> Blood Group : '.$row['blood_group'].'</p> ';
  // echo'   <ul style="margin-bottom: 0px !important; padding-left: 12px;"> ';
  // echo'     <li title="'.$row['spec1'].'" style="font-size: 14px;"> ';
  // echo'      '.$row['spec1'].' </li> ';
  // echo'       <li title="'.$row['spec2'].'" style="font-size: 14px;"> ';
  // echo'        '.$row['spec2'].'</li> ';
  // echo'         <li title="'.$row['spec3'].'" style="font-size: 14px;"> ';
  // echo'         '.$row['spec3'].'</li> ';
  //       echo'     </ul> ';
        echo'     </div> ';
    echo'         <div class="col-lg-4 col-sm-4 doctor_search_right_block"> ';
            // <!-----doc right block-------->
    echo'           <div class="row right_block_row"> ';
            echo'     <div class="col-lg-9 col-sm-9"> ';
            echo'       <p class="para"> ';
            echo'         <i class="fa fa-map-marker" aria-hidden="true"> ';
            echo'         </i>&nbsp;&nbsp; Address</p> ';
              echo'       <p class="para1"> '.$row['adress'].'</p> ';
              echo'       <p class="para"> ';
              echo'         <i class="fa fa-phone" aria-hidden="true"> ';
              echo'         </i>&nbsp;&nbsp; Contact No. </p> ';
                echo'       <p class="para1"> '.$row['contact'].'</p> ';

        echo'               </div>';
        echo'                 </div> ';
          echo'            </div> ';
        echo'                 </div> ';






            echo'           </div> ';






  echo'     </div> ';

}

mysqli_close($link);

?>
<?php include 'footer.php' ?>
</body>
</html>

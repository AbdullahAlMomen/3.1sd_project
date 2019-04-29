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


	  <?php include 'header.php' ?>
		<div class="row">
			<div class="container">
			<form action="search.php" method="POST">
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


		<?php



		//session_start();
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$errors=array();
		$db = 'project';

		$doctor_name = "";




		//echo $doctor_name;

		$link = mysqli_connect($host, $user, $password, $db);


		$sql = "select* from d_registration ";

		$result=mysqli_query($link, $sql);
		//$row=mysqli_fetch_row($result);
		while($row=mysqli_fetch_assoc($result))
		{
		//$username=$row['username'];
		//$first_Name=$row['first_Name'];
		//$last_Name=$row['last_Name'];
		//$email=$row['email'];
		//$speciality=$row['speciality'];
		//$contactNO=$row['contactNO'];
		//$Address=$row['Address'];
		//$designation=$row['designation'];
		//$Fees=$row['Fees'];

		//echo $row['username'];echo"<br>";
		//echo $row['first_name'];echo"<br>";
		//echo $first_Name=$row['first_name'];echo"<br>";
		//echo $row['email'];echo"<br>";
		//echo $row['speciality'];echo"<br>";
		//echo $row['Fees'];echo"<br>";
		//echo $row['designation'];echo"<br>";
		//echo $row['Address'];echo"<br>";
		//echo'<div class="col-lg-12 col-sm-12 doctor_result_div">';
		//echo' <img class="img-circle search_page_doctor_image pull-right" src="images/female_doc.jpg" alt="profile pic">';


		echo"<br>";echo"<br>";


				echo'<div class = "container">';

		echo'<div class="col-lg-12 col-sm-12 doctor_result_div">';
		  echo'<div class="row">';
		    echo'<div class="col-lg-4 col-sm-4 doctor_search_left_block">';

		      echo'<img class="img-circle search_page_doctor_image pull-right" src="images/female_doc.jpg" alt="profile pic">';
		    echo'</div>';
		    echo'<div class="col-lg-4 col-sm-4 doctor_search_mid_block">';

		      echo'<p class="search_page_doctor_name grey_font_color" style="font-size: 22px; font-weight : bold;">  Dr. '.$row['username'].'</p>';//echo $row['username'];
			  echo"<br>";
		      echo'<p class="search_page_doctor_des grey_font_color small_font">';
		        echo $row['speciality'];
		        echo'<p class="search_page_doctor_sp grey_font_color small_font">';
				echo''.$row['designation'].' ';
		      echo'</p>';
		        echo'</div>';



		        echo'<div class="col-lg-4 col-sm-4 doctor_search_right_block">';

		          echo'<div class="row right_block_row">';
		            echo'<div class="col-lg-9 col-sm-9">';
		              echo'<p class="para">';
		                echo'<i class="fa fa-map-marker" aria-hidden="true">';
		                echo'</i>&nbsp;&nbsp; Chamber:</p>';
		                echo'<p class="small_font grey_font_colo">';

                  echo'  '.$row['Address'].' ';
						  echo'</p>';
		                  echo'<p class="para">';
		                    echo'<i class="fa fa-money" aria-hidden="true"></i>';

		                    echo'</i>&nbsp;&nbsp;Fees</p>';
		                    echo'<p class="small_font grey_font_color">New appointment: '.$row['Fees'].' </p>';
		                  echo'</div>';
		                    echo'</div>';
		                 echo'</div>';
		                    echo'</div>';

		                                      echo'<div class="col-md-12 ">';
		                                         echo'<div class="col-md-3">';
		                                             echo'</div>';

		                                       echo'<div class="col-md-2 info_btn">';
																					echo'<button href="javascript:;" id="call" class="btn btn-primary search-list-btn call_button" data-id="2352"><i class="fa fa-phone"></i>Call Now</button>';

																					echo'</div>';
																					// echo"<hr>";echo"<br>";
																				 // echo"<br>";echo"<br>";



		                                       echo'<div class="col-md-2 info_btn">';
		                                        echo'<button href="javascript:;" id="message" class="btn btn-primary search-list-btn consult_button" data-id="2352"><i class="fa fa-envelope"></i> Message Now</button>';
		                                      echo'</div>';

		                                       echo'<div class="col-md-2 info_btn">';
		                                          echo'<a href="javascript:;" class="btn btn-primary search-list-btn book_button" data-id="2352"><i class="fa fa-calendar"></i> Book Appointment</a>';
		                                                         echo'</div>';
		                                                          echo'<div class="col-md-3">';
																								                 echo'</div>';

		                                    echo'</div>';

																				echo'<div class="call">';
																									echo'	<div class="show-phonenumber">';
																										echo'	<div class="phone_and_ext">';
																										echo'		<span class="phone-change-color"> <i class="fa fa-phone"> </i> </span> <span class="phone"><a href="">'.$row['contactNO'].'</a></span> <br>';

																									echo'		</div>';
																								echo'		</div>';
																						echo'			</div>';

																						echo'<div class="message">';
																											 echo'	<div class="show-phonenumber">';
																												 echo'	<div class="phone_and_ext">';
																												 echo'		<span class="phone-change-color"> <i class="fa fa-envelope"> </i> </span> <span class="phone"><a href="">'.$row['email'].'</a></span> <br>';

																											 echo'		</div>';
																										 echo'		</div>';
																								 echo'			</div>';

		                  echo'</div>';




		 echo'</div>';





		//
		// echo'<div class="call">';
		// 					echo'	<div class="show-phonenumber">';
		// 						echo'	<div class="phone_and_ext">';
		// 						echo'		<span class="phone-change-color"> <i class="fa fa-phone"> </i> </span> <span class="phone"><a href="">'.$row['contactNO'].'</a></span> <br>';
		//
		// 					echo'		</div>';
		// 				echo'		</div>';
		// 		echo'			</div>';







		}



		mysqli_close($link);


		?>


		<!-- echo'	<script> ';

			echo'	$(document).ready(function(e){ ';
				echo'   $("#call").click(function(){ ';
				echo'       $(".call").toggle(2000); ';
					echo'  }); ';
		echo'		}); ';

			echo'	$(document).ready(function(e){ ';
				echo'		$("#message").click(function(){ ';
				echo'				$(".message").toggle(2000); ';
		echo'				}); ';
			echo'	});  ';
	echo'			</script>   '; -->



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

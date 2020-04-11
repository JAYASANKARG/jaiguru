<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jai Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/heart5.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

<style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;
  font-family: 'Permanent Marker', cursive;
  color:#ffffff;
  font-size: 30px;
}
.fo{
	font-family: 'Permanent Marker', cursive;
	margin-top:20px;
	font-size: 20px;
	color:black;
}
.name{
	font-size:20px;
	font-family: 'Fredoka One', cursive;
}


</style>
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/img.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        
				<span class="login100-form-title p-b-37">
					Jai Guru
				</span>
		<?php
		$yname=$_POST["yname"];
		$cname=$_POST["cname"];
		$result=0;
		
		$var="<span class='login100-form-title name'>
		Your name : $yname
	</span><br>";
		$var1="<span class='login100-form-title name'>
		Your crush name : $cname
	</span><br>";
		echo $var;
		echo $var1;
		?>

		<?php

		
		
		if($yname==$cname){
			$result=100;
		}
		elseif(($yname=="kayal" and $cname=="jai") or($cname=="kayal" and $yname=="jai")){
			$result=101;
		}
		elseif(($yname=="lavanya" and $cname=="jai") or($cname=="lavanya" and $yname=="jai")){
			$result=101;
		}
		elseif(($yname=="kaviya" and $cname=="jai") or($cname=="kaviya" and $yname=="jai")){
			$result=101;
		}

		elseif(($yname=="pradeep" and $cname=="vigneshwari") or($cname=="vigneshwari" and $yname=="pradeep")){
			$result=1001;
		}
		else{
			$result=rand(60,100);
		}


		$web="<div class='container'>
  			<img src='images/heart5.png' alt='Snow' style='width:100%;'>
  		<div class='centered'>$result%</div>
		</div>";
		echo $web	
		?>

		<span class="login100-form-title fo">
		The Jai Guru Calculator you can calculate the probability of a successful relationship between two people.
		To find out what the chances for you and your dream partner
		</span>
			
			
				
			

		

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
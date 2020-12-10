
<!DOCTYPE html>

<?php 
/* error_reporting(0) za da ne ja dava greshkata, koa ke se menuvaat raboti na stranata da se zakomentira za da se pojavuvaat errors,warnings, notices  ako ima */
error_reporting(0);
session_start();
$error1=$_SESSION['error1'];
$error2=$_SESSION['error2'];

?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Resetiranje lozinka(TIG) &mdash;</title>

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic" rel="stylesheet" type="text/css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

     <div id="fh5co-menus"  style="background-color:#FFFFFF ; background-size:cover">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded" style="background-color:#FFFFFF">
					<div class="col-md-8 col-md-offset-2" style="background-color:#FFFFFF;  border-color:  #FF7600;  border:solid; border-color: #F97C00 ;border-width: thin; border-radius: 25px">
						<div class="form-group">
							
							<center><img src="images/logo.png"></center>
							<strong><i><h1 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font: italic"><center>Ресетирај лозинка</center></h1></i></strong> 
							
							<hr>
						<form class="m-content" action="promeni_lozinka2.php" method="POST">
						<input class="form-control" type="password" minlength="6" name="pass1" id="pass1" placeholder="Внеси нова лозинка" required autocomplete="off" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
						<br>
						<br>
						<input class="form-control" type="password" name="pass2" id="pass2" placeholder="Повтори ја лозинката" required autocomplete="off" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';  ">
							<br>
							<?php echo "<center><p id='error'> $error1 </p> </center>";
								
								?>
								<?php  $_SESSION['error1']="";?>
							<hr>
							
							
							<input name="kod" id="kod" class="form-control" type="text" required placeholder="Код за валидација"style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
							<?php echo "<center><p id='error'> $error2 </p> </center>";
								
								?>
								<?php  $_SESSION['error2']="";?>
							<br>
							<input class="btn btn-primary"  value="Ресетирај" name="login_user" type="submit" style="float: center;"> 
			
				</form>
						</div>
					</div> 
							
					   
						
						
					</div>
				</div>
				
			</div>
		</div>
			
	
			
<style>

	.form-control1 {
  box-shadow: none;
  background: transparent;
  border: 2px solid rgba(0, 0, 0, 0.1);
  height: 54px;
  font-size: 18px;
  font-weight: 300;
	width: 200px;
}
.form-control1:active, .form-control1:focus {
  outline: none;
  box-shadow: none;
  border-color: #fb6e14;
}


/* stilza errorot*/
	#error
	{
		text-decoration-color: #FF0004;
		font-size: 16px;
		color: #FF0004;
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	}
	



</style>



	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>


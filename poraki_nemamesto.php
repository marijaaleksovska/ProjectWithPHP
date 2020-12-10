
<!DOCTYPE html>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TIG &mdash;</title>

	

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

	 <?php session_start();
		$p=$_SESSION['people'];
		$r=$_SESSION['restoran'];
		$v=$_SESSION['vreme'];
		
		if($r=="dzino")
		{
			$r="Кај Џино";
		}
		else if($r=="veneto")
		{
			$r="Венето";
		}
		else{
			$r="Енрико";
		}
		
		?> 
		
		
		


		

		

		
		

			
			
			
			
			
			

		<div id="fh5co-menus" data-section="najavise" style="background-color: #DBDADA; background-size: cover">
			
			
			<center>
				
              <h2 class=" w3-animate-zoom" style="text-decoration-style:solid; animation-duration: 3s;  text-decoration-color:#1A1A1A ">   &nbsp  &nbsp &nbsp   <i><b>Неуспешна резервација!</i></b></h2></center>
			
			<br>
			 <?php echo " <center><p>За жал нема доволно слободни места за вашата резервација во $r на $v,одберете <a href=http://localhost/index1.php#fh5co-contact style='text-decoration-color: #E06100;color:#E06100;'> друг термин</a> или 
			 повелете во некој друг од нашите <a href=http://localhost/index1.php#fh5co-events style='text-decoration-color: #E06100;color:#E06100;'> ресторани</a>.</center>";?> 
			<br><br>
			<center><ul class=" w3-container  " style="list-style-type: none; animation-delay: 4s; ">
				
				
				<li><a href=http://localhost/index1.php style="cursor: pointer; font-size: 18px;text-decoration-color: #E06100;  ">► Назад кон страната</a> </li>
				
				</ul>
			</center>
			
			
			
			
				<br><br><br><br><br>
				<br><br>
				<br><br>
			
			
			
			
		</div>


			
			
	
			





	
			
	
			 	
	
	
	
	
	
	
	

	
	
	
	
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


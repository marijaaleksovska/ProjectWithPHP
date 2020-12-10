<?php include('login.php') ?>

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


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate">The Italian Guide</h1>
							<h2 class="to-animate">Вкусот на Италија, во Скопје.</h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Почетна</a>
						<a href="#" data-nav-section="about">За нас</a>
						<a href="#" data-nav-section="features">Специјалитети</a>
					</div>
					<div class="fh5co-logo">
						<a href="#" > <img src="images/logo.png"  width="110px" height="90px"></a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="events">Ресторани</a>
						<a href="#" data-nav-section="reservation">Резервирај</a>					
						<div class="dropdown">
						<input  type="button"name="profil" onclick="myFunction()" class="btn btn-primary btn-outline dropbtn" value="<?php echo $_SESSION['user'];?>">
  
  <div id="myDropdown" class="dropdown-content">
  <a  data-nav-section="najavise"  style="position: relative; color: rgba(236,142,49,1.00); text-align: center"  >Резервации</a>		
			
    <a type="button"   style="position: relative; color: rgba(236,142,49,1.00); text-align: center; display: inline-block" onclick="location.href='logout.php'; return false" >Одјави се</a>
    
  </div>
</div>				
			 	</div>
				
			</div>
		</div>

<style>
		.dropbtn {
    
    padding: 10px;
    font-size: 14px;
   font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	font-size-adjust: auto;
			
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color:#f16104;
}

/* The container- needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
	
	
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
	text-align: center
	color: #f16104;
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	
}

/* Links inside the dropdown */
.dropdown-content a {
	
    
    padding: 10px 14px;
    text-decoration: none;
    display: block;
	text-align: center
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #DBDBDB;
	text-decoration: underline;
	text-decoration-line:underline;
	    cursor: pointer;

	}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}</style>
		<script>
			/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
			
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
		</script>
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/zanas.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">За нас</h2>
				<p class="to-animate"><span>П</span>остои поговорка која гласи „che mangia bene mangia Italiano“ или „оној кој добро се храни, јаде италијанска храна“.</p>
			 <p>
				Италијанската кујна е една од најпознатите и најраспространетите кујни во светот.
					Со само еден клик резервирајте егзотично кулинарско доживување во некој од најдобрите италијански ресторани во Скопје и почуствувајте ја магијата на италијанската кујна во твојот град. 
				</p>
				<p class="text-center to-animate"><a href="#fh5co-menus1111" class="btn btn-primary btn-outline"  data-nav-section="kontakt">Контакт</a></p>
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div id="fh5co-featured" data-section="features">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Специјалитети</h2>
						<p class="sub-heading to-animate">Овие јадења во комбинација на прекрасните италијански вина и десерти за миг ќе ве однесат во незаборавно италијанско искуство. Доколку посетите некој од нашите италијански ресторани, овие јадења ви препорачуваме да ги пробате.</p>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-grid">
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika1.jpg)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Равиоли во доматен сос и свежи зачини</h2>
								
								<span class="pricing">180 ден</span>
								<br>
								<p> За овој необичен и незаборевен оброк не мора да отиде дури до Италија туку може да го најдете во ресторанот<a href="#fh5co-events" > кај Џино. </a></p>
							</div>
						</div>
						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika5.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Тирамису</h2>
									<span class="pricing">150 ден</span>
									<p>Италија не може да се доживее без слаткиот вкус на тирамису. Повелете на најдоброто тирамису во <a href="#fh5co-events"> Енрико.</a></p>
								</div>
							</div>
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika4.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Пица Маргарита</h2>
									<span class="pricing">230 ден.</span>
									<p>Најпознатата италијанска пица, направена во боите на Италија. За оваа пица ви препорачуваме да го посетите <a href="#fh5co-events"> Енрико. </a> </p>
								</div>
							</div>
						</div>

						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika.png)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Тосканска игра</h2>
									<span class="pricing">80 ден</span>
									<p>Разбудете ги вашите најдлабоки сетила уживајќи во прекрасното Италијанско вино во <a href="#fh5co-events">Венето.</a> </p>
								</div>
							</div>
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika3.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Лазањи Болоњезе</h2>
									<span class="pricing">110 ден</span>
									<p>Најдобриот Болоњезе сос само во <a href="#fh5co-events">кај Џино.</a></p>
								</div>
							</div>
						</div>
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/slika2.jpg)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Тоскански кремави тестенини со колбаси</h2>
								<span class="pricing">190 ден</span>
								<br>
								<p>Вкусот на Тоскана на дофат на рака. Побарајте го ова јадење во <a href="#fh5co-events"> Венето. </a></p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<div style="background-image: url(../images/rest.jpg); background-attachment: fixed; background-size:cover; background-repeat:no-repeat;">
		<div id="fh5co-events" data-section="events" style="background-image: url(images/rest.jpg);background-repeat:no-repeat;" >
			<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
					  <h2 class="heading">Ресторани</h2>
					  <p class="sub-heading"></p>
					</div>
				</div>
				<!--.row--> <div class="row">
					
					<!--e--><div class="col-md-4">
						<!--fh5e--><div class="fh5co-event to-animate-2" >
						  <h3>Енрико</h3>
						  <span class="fh5co-event-meta"></span>
						  <p class="one"><img src="11.png" alt="enriko" width="190" height="190" id="1" ></p>
							<p><a id="myBtn1"class="btn btn-primary btn-outline" onClick="function1()">Мени</a></p>
							<p><a href="#fh5co-contact" class="btn btn-primary btn-outline">Резервирај</a></p>
					     <!--fh5e--></div>
					
			
			<style>


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
			
				
				
.modal-content {
    position: relative;
    background-color: white;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
				/* The Close Button */
.close1 {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: orange;
    color: white;
}

.modal-body {padding: 2px 16px;}
.sliki
{
	width: 400px;
	height:300px;
									
}

</style>


<body>


<!-- TriggerOpen The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2>Мени</h2>
    </div>
    <div class="modal-body">
      <p><div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Безалкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/domatisok.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Сок од домати/0,25л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										60 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img  src="images/cedevita.jpg" class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Цедевита/0,15г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										70 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/casakokakola.jpg " class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Кока кола/0,25л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										70 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/lemon.jpg " class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Свежo цеден лимон/0,35л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										120 ден.
									</div>
								</li>								
								<h2 class="fh5co-drinks">Алкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/amstel.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Амстел премиум точено/0,5л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										130 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/mastika.jpeg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Мастика/0,05л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										70 ден.
									</div>
								</li>
								
								
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/martini.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Мартини/0,08л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										130 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/tga2.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Т'га за југ/црвено вино/0,75л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										550 ден.
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Салати</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/cezar.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Цезар салата </h3>											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										260 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/kapreze.jpg" class ="sliki"!important
												 class="img-responsive" >
										</figure>
										<div>
											<h3>Капрезе</h3>										
										</div>
									</div>
									<div class="fh5co-food-pricing">
										170 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/pastasalata.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Италијанска паста салата</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										220 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/brokula.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Брокула пилешка паста салата</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										230 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Пици</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/diavlo.jpg" class ="sliki" !important class="img-responsive">
										</figure>
										<div>
											<h3>Диавло</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										340 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/napolitana.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Наполитана со зеленчук</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/morski.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Морски свет</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										350 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/vezuvio.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Везувио</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>					
				</div>			
	        </p>
    </div> 
</div> 



<script>
// Get the modal
	function function1(){
var modal1 = document.getElementById('myModal');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}}
</script>		
		</div>				
			<!--e--></div>
			
				
			
			
					
							
							
							
							
			
			    <!--d--> <div class="col-md-4">
						<!--fh5d--><div class="fh5co-event to-animate-2">
						  <h3>Кај Џино</h3>
						  <span class="fh5co-event-meta"></span>
						  <p><img src="22.jpg" alt="dzino" width="191" height="191"></p>
							<p><a id="myBtn2" onclick="function2()" class="btn btn-primary btn-outline">Мени</a></p>
							<p><a href="#fh5co-contact" class="btn btn-primary btn-outline">Резервирај</a></p>
						<!--fh5d--></div>
					
<style>
/* The Close Button */
.close2 {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
						
<body>



<!-- TriggerOpen The Modal -->


<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close2">&times;</span>
      <h2>Мени</h2>
    </div>
    <div class="modal-body">
      <p><div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Безалкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/frape.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Овошно фрапе/0,20л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										120 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img  src="images/ladencaj.jpeg" class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Ладен чај</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										100 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/negazirani.jpg " class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Негазирани сокови/0,20л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										120 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/bezalkoholnipijaloci.jpg" class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Газирани сокови/0,25л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										90 ден.
									</div>
								</li>								
								<h2 class="fh5co-drinks">Алкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/stok.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Шток 84/0,05л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										100 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/krombaher.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Кромбахер/0,33л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										180 ден.
									</div>
								</li>
								
								
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/aperol.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Аперол/0,05л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										160 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/skovin2.png" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Сковин Марков манастир/0,05л</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										90 ден.
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Тестенини</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/fusili.png" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Фусили Карбонара/400г </h3>											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										260 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/taljateli.jpg" class ="sliki"!important
												 class="img-responsive" >
										</figure>
										<div>
											<h3>Таљатели со лосос/400г</h3>										
										</div>
									</div>
									<div class="fh5co-food-pricing">
										800 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/makaroni.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Макарони со вргањ/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/ravioli.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Равиоли свежи со месо/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Пици</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/toskana.jpg" class ="sliki" !important class="img-responsive">
										</figure>
										<div>
											<h3>Тоскана/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/kalabreze.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Калабрезе/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										200 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/quatro.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Кватро Формаџи/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/fruti.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Фрути ди Маре/400г</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										400 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
				
		
</p>
     
    </div>
    
  </div>
	



<script>
function function2(){
var btn2 = document.getElementById("myBtn2");
		
		var modal2 = document.getElementById('myModal2');
		// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }

		
	
	}
}

</script>
	</div>
	<!--d--></div>						
					
						
						
					
					<!--v--><div class="col-md-4">
						<!--fh5v--><div class="fh5co-event to-animate-2">
						  <h3>Венето</h3>
						  <span class="fh5co-event-meta"></span>
						  <p><img src="33.png" alt="veneto" width="170" height="190"></p>
							<p><a id="myBtn3" onclick="function3()" class="btn btn-primary btn-outline">Мени</a></p>
							<p><a href="#fh5co-contact"  class="btn btn-primary btn-outline">Резервирај</a></p>
						<!--fh5v--></div>

<style>
			
			/* The Close Button */
.close3 {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}</style>

<!-- TriggerOpen The Modal -->


<!-- The Modal -->
<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close3">&times;</span>
      <h2>Мени</h2>
    </div>
    <div class="modal-body">
      <p><div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Безалкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/negsok.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Негазирани сокови</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										100 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img  src="images/smut.jpg" class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Смути</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										150 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/fredokapucino.jpg" class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3>Фредо капучино</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										120 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/cedenisokovi.jpg " class="sliki"!important class="img-responsive">
										</figure>
										<div>
											<h3> Свежо цедени сокови</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										130 ден.
									</div>
								</li>								
								<h2 class="fh5co-drinks">Алкохолни пијалоци</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/mart.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Мартини</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										140 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/mohito.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Мохито</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										160 ден.
									</div>
								</li>
								
								
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/skop.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Скопско</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										130 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/belovino.jpg" class="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Чаша бело вино/Сковин</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										80 ден.
									</div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Главни јадења</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/njoki.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Њоки </h3>											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										300 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/kaprezeprsuta.jpg" class ="sliki"!important
												 class="img-responsive" >
										</figure>
										<div>
											<h3>Капрезе салата со пршута</h3>										
										</div>
									</div>
									<div class="fh5co-food-pricing">
										200 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/vegetarijanskapica.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Вегетаријанска пица</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										310 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/pileskovokari.jpg" class ="sliki"!important class="img-responsive" >
										</figure>
										<div>
											<h3>Пилешко во кари</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										280 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Десерти</h2>
							<br>
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/cokoladenmus.jpg" class ="sliki" !important class="img-responsive">
										</figure>
										<div>
											<h3>Чоколаден мус</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										150 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/cizkejk.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Чизкејк</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										140 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/toploladno.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Топло ладно</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										170 ден.
									</div>
								</li>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="images/tiramisu.jpg" class ="sliki" !important class="img-responsive" >
										</figure>
										<div>
											<h3>Тирамису</h3>
											
										</div>
									</div>
									<div class="fh5co-food-pricing">
										200 ден.
									</div>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
				
			
</p>
     
    </div>
	  </div>
		
    
 



<script>
// Get the modal
	
	function function3(){
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}}
</script>
				</div>						
			<!--v--></div>	
			
					
					
					
					
					
					
			
	
	<!--.row--></div>
</div>
			</div>
		<div id="fh5co-contact" data-section="reservation">
			<form method="POST" action="reservation.php">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Резервирај</h2>						
				<p class="sub-heading to-animate">Доколку сакате да резервирате во некој од нашите ресторани пополнете ја следната форма.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<iframe src="https://www.google.com/maps/d/embed?mid=1MTYjInh6AByQZqCVg9O29KMiRRFfYjbA"  width="530" height="500"></iframe>
					</div>
					<div class="col-md-6 to-animate-2">
						<h3>Информации</h3>
						
						
						<div class="form-group">
							<label for="occation" class="sr-only">Ресторани</label>
							<select class="form-control" id="occation" name="rest" required>
							  <option value="" selected="true" disabled="disabled" >Одбери ресторан</option>
							  <option value="enriko">Енрико</option>
							  <option value="dzino">Кај Џино</option>
							  <option value="veneto">Венето</option>
							</select>
						</div>
						<div class="form-group">
							<label for="date" class="sr-only">Датум</label>
							<input id="date" class="form-control" placeholder="Датум &amp; Време" type="text" name="date" required>
						</div>

						<div class="form-group">
							<label for="number" class="sr-only">Број на луѓе</label>
							<input type="number" min="1" max="40" id="number" class="form-control" placeholder="Број на луѓе" name="number" required>
						</div>
							
						
						<div class="form-group ">
							<input class="btn btn-primary" value="Резервирај" type="submit" name="rez">
						</div>
						</form>
						</div>
				</div>
			</div>
		</div>
	<div id="fh5co-menus" data-section="najavise" style="background-color: #DBDADA; background-size: cover">
			
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate"> Вашите резервации</h2>
						
						
						<center><table id="customers" ><thead>
							<tr>
								<th>Ресторан</th>
								<th>Датум и време</th>
								<th>Број на гости</th>
								<th>Откажи резервација</th>
							</tr>
						</thead>
						<tbody id="live_date">
							<?php
							
							$servername = "localhost";
    $usern = "root";
	$password = "";
	$dbname = "registration";
$output='';
	$conn = new mysqli($servername, $usern, $password, $dbname);
     if (mysqli_connect_error())
  	{
  		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  	}
		$uname=$_SESSION['user'];
		 $sql1 = "SELECT * FROM users WHERE username='$uname' ";
         $result = mysqli_query($conn, $sql1);
		 $row = mysqli_fetch_assoc($result);
         $id_user=$row["user_id"];
		$sql2="SELECT * FROM reservation WHERE user_id='$id_user'";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0){
			while($row2=mysqli_fetch_array($result2)){
				echo"<tr>";
				if($row2["restoran_id"]==1){
					echo"<td>Kaj Џино </td>";
				}
				if($row2["restoran_id"]==2){
					echo"<td> Венето</td>";
				}
				if($row2["restoran_id"]==3){
					echo"<td> Енрико </td>";
				}
				echo"<td> ".$row2["date"]."</td>";
				echo"<td><center> ".$row2["gosti"]."</center></td>";
				echo'<td><center><strong><a href="index1.php?delete= '.$row2["id"]. '"; onClick=" javascript:conformationDelete($(this));return false;">╳</a></strong></center></td>
					    </tr>';
						
				echo'<script>function confirmationDelete(anchor)
{
   var conf = confirm("Are you sure want to delete this record?");
   if(conf)
      window.location=anchor.attr("href");
}</script>';
			}
								
							}
							if(isset($_GET["delete"])){
								$did=$_GET["delete"];
								$sql3="SELECT * FROM reservation WHERE id='$did'";
								$res=mysqli_query($conn,$sql3);
		                        $row3=mysqli_fetch_assoc($res);
								$brl=$row3["gosti"];
								$restoran1=$row3["restoran_id"];
								$sql4="SELECT * FROM restorani WHERE restoran_id='$restoran1'";
								$res4=mysqli_query($conn,$sql4);
		                        $row4=mysqli_fetch_assoc($res4);
								$mesta=$row4["restoran_kapacitet"];
								$nmesta=$mesta+$brl;
								/*$sql5 = "UPDATE restorani SET restoran_kapacitet='$nmesta' WHERE restoran_id='$restoran1'";
			mysqli_query($conn, $sql5);*/
								
								mysqli_query($conn,"DELETE FROM reservation WHERE id='$did'");
								echo"<script>window.location.href='http://localhost/index1.php#fh5co-menus';</script>";
								

								
							}
							
						
							?>
					    
						    
						</tbody></table>
							</center
						
						
						
					</div>
				</div>
				
			</div>
		</div>

	
	
<style>
#customers {
   
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #EEAB2E;
    color: white;
}
/* Full-width input fields */
.i {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
.i:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: darkorange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid white;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:3;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: darkorange;
	
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.c {
    padding: 16px;
}

/* The Modal (background) */
.m {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(81,79,79,0.52);
    padding-top: 50px;
}

/* Modal Content/Box */
.m-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;

    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close9 {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;

    color: #f1f1f1;
}

.close9:hover,
.close9:focus {
    color: darkorange;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
			
			
	
			

<div id="id01" class="m">
  <span onclick="document.getElementById('id01').style.display='none'" class="close9" title="Close Modal">&times;</span>
  <form class="m-content" action="server.php" method="POST">
	  
    <div class="c">
      <h1 style="color:darkorange"><b></b>Регистрирај се</h1></b>
      <p>Пополнете ја формата за да го креирате вашиот профил.</p>
      <hr>
      <label for="email"><b>Корисничко име</b></label>
      <input type="text" placeholder="Внеси корисничко име" name="username" class="i" required>
     <!-- <label for="email"><b>Презиме</b></label>
      <input type="text" placeholder="Внеси презиме" name="prezime" class="i" required>-->
      <label for="email"><b>Маил</b></label>
      
      <input type="text" placeholder="Внеси меил" name="email" class="i" required>

      <label for="psw"><b>Лозинка</b></label>
      <input  class="i"type="password" placeholder="Внеси лозинка" name="pass" required>

      <label for="psw-repeat"><b>Повтори лозинка</b></label>
      <input class="i" type="password" placeholder="Повтори ја лозинката" name="pass1" required>
     
      <p>Веќе имате постоечки профил? <a href="#fh5co-menus" style="color:dodgerblue" onclick="document.getElementById('id01').style.display='none'"> Најави се</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Откажи</button>
        <button type="submit" name="register" class="signupbtn" style="cursor: pointer">Регистрирај се</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	
			<style>
				.black{
					font-style: italic;
					
				}
				
				li
				{
					list-style-type: none;
				}
			</style>
			
			<div id="fh5co-menus1111" data-section="kontakt" style="background-color: #BBBBBB; background-size: cover">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">	<br><br><br>					
						<h2 class="heading">Контакт</font></h2> 
						<center> <p class="sub-heading to-animate">										<li><img src="images/iconadresa.png"  width="30px" height="30px" class="black" </li><i style="color:black;"><b> &nbsp&nbsp Љубљанска 4,Скопје 1000</i></b></li>	
							<li><img src="images/iconphone.png"  width="30px" height="30px" class="black" </li><i style="color:black;"><b> &nbsp&nbsp (02) 3013-279 </i></b></li>	
							<li><img src="images/iconmail.png"  width="30px" height="30px" class="black" </li><i style="color:black;"><b> &nbsp&nbsp theitalianquide@gmail.com </i></b></li>	
							  <br><br>
							
						</ul>
					</div>
							
					 
					   </p></center>
						
						
					</div>
				</div>
				
			</div>
		</div>
	
	
	
	
	
	
	

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; Изработиле: 218/2016, 219/2016, 197/2016, 187/2016  
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Оди најгоре</a></p>
				</div>
			
		</div>
	</div>


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


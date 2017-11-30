<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	/*
		Funcion contador de views
		guarda el resultado en un documento txt
	*/
    function contador()
    {
        $archivo = "contador.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }

    contador(); //ejecuta la funcion contador
?>

<!DOCTYPE html>
<html>
<head>
<title>Huancayo Delivery | Portal Web</title>

	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide"/>
	
	<meta name="description" content="Huancayo delivery, todo lo que precisas a un click de distancia y en la puerta de tu casa">
	<meta name="keywords" content="Huancayo delivery, delivery huancayo" />

	<script type="application/x-javascript"> 
		addEventListener("load", 
			function() { 
				setTimeout(hideURLbar, 0); 
			}, false);
			function hideURLbar(){ 
				window.scrollTo(0,1); 
			} 
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- js -->
	   <script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
		<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
			<script type="text/javascript">
				jQuery(function() {
				jQuery('.starbox').each(function() {
					var starbox = jQuery(this);
						starbox.starbox({
						average: starbox.attr('data-start-value'),
						changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
						ghosting: starbox.hasClass('ghosting'),
						autoUpdateAverage: starbox.hasClass('autoupdate'),
						buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
						stars: starbox.attr('data-star-count') || 5
						}).bind('starbox-value-changed', function(event, value) {
						if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
						} 
					})
				});
			});
			</script>
	<!---//End-rate---->

	<link href="https://fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<style>
		h1,h2,h3,h4, .h1,.h2,.h3,.h4{
			font-family: 'Anton', sans-serif;
		}
	</style>

</head>

<body id="scrool-slim">

<a href="offer.php">
	<img src="images/LOGO-HYODELIVERY-esquina.png" class="img-head" alt="" width="150px">
</a>

<div class="header">
	<div class="container">
		<div class="logo">
			<!--h1 ><a href="index.php"><b>T<br>H<br>E</b><img src="images/LOGO-HYODELIVERY.png" alt="" width="200px"></a></h1-->
			<img src="images/LOGO-HYODELIVERY.png" alt="" width="300px">
		</div>

		<!--div class="head-t">
			<ul class="card">
				<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
				<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
				<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
				<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
				<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
			</ul>	
		</div-->

		<div class="head-t">
			<!--h2>Huancayo delivery</h2-->
		</div>
		
		<div class="header-ri">
			<ul class="social-top">
				<li><a href="https://www.facebook.com/HYO-Delivery-872518679584383/" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
			</ul>	
		</div>

		<div class="nav-top">
			<nav class="navbar navbar-default">
			
			<div class="navbar-header nav_2">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				

			</div> 
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav ">
					<li class=" active"><a href="index.php" class="hyper "><span>Inicio</span></a></li>	
					
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Comida<b class="caret"></b></span></a>
						<ul class="dropdown-menu multi">
							<div class="row">
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
	
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
										<li><a href="kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
								
									</ul>
								
								</div>
								<div class="col-sm-3">
								
									<ul class="multi-column-dropdown">
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>
									</ul>
								
								</div>
								<div class="col-sm-3">
								
									<ul class="multi-column-dropdown">
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
										<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
								
									</ul>
								</div>
								<div class="col-sm-3 w3l">
									<a href="kitchen.php"><img src="images/me.png" class="img-responsive" alt=""></a>
								</div>
								<div class="clearfix"></div>
							</div>	
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Tragos y Bebidas <b class="caret"></b></span></a>
						<ul class="dropdown-menu multi multi1">
							<div class="row">
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
								
									</ul>
									
								</div>
								<div class="col-sm-3">
									
									<ul class="multi-column-dropdown">
										<li><a href="care.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
								
									</ul>
									
								</div>
								<div class="col-sm-3">
									
									<ul class="multi-column-dropdown">
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
										<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
								
									</ul>
								</div>
								<div class="col-sm-3 w3l">
									<a href="care.php"><img src="images/me1.png" class="img-responsive" alt=""></a>
								</div>
								<div class="clearfix"></div>
							</div>	
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Pagos<b class="caret"></b></span></a>
						<ul class="dropdown-menu multi multi2">
							<div class="row">
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
										<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
									</ul>
								</div>
								<div class="col-sm-3 w3l">
									<a href="hold.php"><img src="images/me2.png" class="img-responsive" alt=""></a>
								</div>
								<div class="clearfix"></div>
							</div>	
						</ul>
					</li>

					<li><a href="contact.php" class="hyper"><span>Contáctanos</span></a></li>
					<!--li><a href="contact.php" class="hyper"><span><?php include('contador.txt'); ?></span></a></li-->
				</ul>
			</div>
			</nav>
			 <div class="cart" >
				<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>			
</div>
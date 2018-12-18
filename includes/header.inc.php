<?php
  session_start ();
 ?>

 <!DOCTYPE HTML>
 <html lang="en-US">
 <head>
 	<title>Pitch it - HTML5 landing page</title>

 	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="css/bootstrap.css" />
 	<link rel="stylesheet" href="css/font-awesome.min.css" />
 	<link rel="stylesheet" href="css/linea-icon.css" />
 	<link rel="stylesheet" href="css/fancy-buttons.css" />

 	<!--=== Google Fonts ===-->
 	<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
 	<link href="https://fonts.googleapis.com/css?family=Lato|Merriweather" rel="stylesheet" type="text/css">
 	<!--=== Other CSS files ===-->
 	<link rel="stylesheet" href="css/animate.css" />
 	<link rel="stylesheet" href="css/jquery.vegas.css" />
 	<link rel="stylesheet" href="css/baraja.css" />
 	<link rel="stylesheet" href="css/jquery.bxslider.css" />

 	<!--=== Main Stylesheets ===-->
 	<link rel="stylesheet" href="css/style.css" />
 	<link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/profile.css" />
 	<!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
 	<link rel="stylesheet" id="scheme-source" href="css/schemes/gray.css" />

 	<!--=== Internet explorer fix ===-->
 	<!-- [if lt IE 9]>
 		<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 		<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 	<![endif] -->


 </head>
 <body>

 	<!--=== Preloader section starts ===-->
 	<section id="preloader">
 		<div class="loading-circle fa-spin"></div>
 	</section>
 	<!--=== Preloader section Ends ===-->

 	<!--=== Header section Starts ===-->
 	<div id="header" class="header-section">
 		<!-- sticky-bar Starts-->
 		<div class="sticky-bar-wrap">
 			<div class="sticky-section">
 				<div id="topbar-hold" class="nav-hold container">
 					<nav class="navbar" role="navigation">
 						<div class="navbar-header">
 							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
 									<span class="sr-only">Toggle navigation</span>
 									<span class="icon-bar"></span>
 									<span class="icon-bar"></span>
 									<span class="icon-bar"></span>
 							</button>
 							<!--=== Site Name ===-->
 							<a class="site-name navbar-brand" href="index.php">
 								<img src="images/logos-01.png" id="home_icon"></a>
 						</div>

 						<!-- Main Navigation menu Starts -->
 						<div class="collapse navbar-collapse navbar-responsive-collapse">
 							<ul class="nav navbar-nav navbar-right">
 								<li>
 									<div class="nav-login">
                    <?php
                      if (isset($_SESSION['u_id'])) {
                        echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                            </form>';
                      } else {
                        echo '<form class="" action="includes/login.inc.php" method="POST">
                         				<input type="text" name="email" placeholder="e-mail">
                         				<input type="password" name="pwd" placeholder="password">
                         				<button type="submit" name="submit">Login</button>
                         			</form>';
                      }
                     ?>


 								</div>

 								</li>

 								</div>

 							</ul>

 						<!-- Main Navigation menu ends-->
 					</nav>
 				</div>
 			</div>
 		</div>
  </div>

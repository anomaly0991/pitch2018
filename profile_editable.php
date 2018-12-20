<?php
include 'includes/header.inc.php';
include_once 'includes/dbh.inc.php';
?>

<style >
	<?php
	include 'css/profile.css';
	 ?>
</style>

<section id="step-1">

	<div class="profilegrid">


		<div class="item_a">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form>
				<img src="images/client_1.jpg" id="profilepic">
				<h3>
					<?php
					if (isset($_SESSION['u_email'])) {
						echo $_SESSION['u_first'];
						echo $_SESSION['u_last'];
					}
					 ?>

				</h3> <button type="button" name="button">Hire Me!</button>
				<p>Occupation</p>
				<p>Years Experience</p>
				<p>Rate</p>
				<p>Willing to Travel</p>
				<p>#of Followers</p>
				<p>Location</p>
				<p>summary</p>
				<p>Resume PDF link</p>

				<p>Network Followers</p>

		</div>
		<div class="item_b">

				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/75317749?title=0&amp;byline=0&amp;portrait=0" width="720" height="480"></iframe>
				</div>

		</div>
		<div class="item_c">
			Comments section
		</div>
		<div class="item_d">
			similar professionals
		</div>
	</div>







    <!--=== Footer section Starts ===-->
  	<div id="section-footer" class="footer-wrap">
  		<div class="container footer center">
  			<div class="row">
  				<div class="col-lg-12">
  					<h4 class="footer-title"><!-- Footer Title -->
  						<a class="site-name" href="#">
                <img src="images/logos-01.png" id="home_icon">
              </a>
  					</h4>

  					<!-- Social Links -->
  					<div class="social-icons">
  						<ul>
  							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
  							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
  							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
  							<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
  							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
  							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
  						</ul>
  					</div>

  					<p class="copyright">All rights reserved &copy; 2019</p>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!--=== Footer section Ends ===-->

  <!--==== Js files ====-->
  <!--==== Essential files ====-->
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

  <!--==== Slider and Card style plugin ====-->




  <!--==== MailChimp Widget plugin ====-->
  <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>

  <!--==== Scroll and navigation plugins ====-->
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>

  <!--==== Custom Script files ====-->
  <script type="text/javascript" src="js/custom.js"></script>

  </body>
</html>

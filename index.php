<?php
include 'includes/header.inc.php';
include_once 'includes/dbh.inc.php';
?>
		<!-- sticky-bar Ends-->
		<!--=== Header section Ends ===-->

		<!--=== Home Section Starts ===-->
		<div id="section-home" class="home-section-wrap center">
			<div class="section-overlay"></div>
			<div class="container home">
				<div class="row">

					<h1 class="well-come"><img src="images/logos-01.png" class="pitchlogo" alt=""></h1>

					<div class="col-md-8 col-md-offset-2">
						<p class="intro-message">Recruit for your film and network with other creative professionals </p>
						<?php
						if (isset($_SESSION['u_email'])) {
							echo $_SESSION['u_first'];
						} 
						?>
						<div class="home-buttons">
							<a href="pitch_signup.php" class="fancy-button button-line button-white vertical">
								Create your free profile
								<span class="icon">
									<i class="fa fa-gear"></i>
								</span>
							</a>
					<!--===	<a href="#" class="fancy-button button-line button-white zoom">
								Stream
							<!	<span class="icon">
									<i class="fa fa-leaf"></i>!>
								</span>===-->
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== Home Section Ends ===-->
	</div>

	<!--=== Services section Starts ===-->
	<section id="section-services" class="services-wrap">
		<div class="container services">
			<div class="row">

				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3 id="vistitle">Visibility for the film industry</h3>
				</div>

				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-book-pencil fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Find a Crew</h4>
						<p class="service-description justify">
							Browse a directory of top talent in the field.
							A strong creative team is the backbone of any impactful production.
							Whether your project is big or small, a documentary or sci-fi thriller,
							find like-minded professionals to help bring your film to life.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->

				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-paperplane fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Find a project</h4>
						<p class="service-description justify">
							See what film productions are currently recruiting in your area.
							New exciting projects are being posted regularly.
							Free-lance work as well as independent collaborations are sure to
							keep your skills sharp.
							Your next gig may come sooner than you think.


						</p>
					</div>
				</div>
				<!-- Single Service ends -->

				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-accelerator fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Network with other creators</h4>
						<p class="service-description justify">
							Search through a directory creative profiles. Impressed with someone's work?
							Follow their page and receive updates on their projects. You can also
							send a collab request to let them know you'd like to work together in the future.
							If it's mutual, you'll be able to message them directly.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->

				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-lightbulb fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Gain an audience</h4>
						<p class="service-description justify">
							Film Enthusiasts are welcome here. Browse through pitches to see learn of new interest films to watch out for.
							Follow the project to get updates on the production and information on release dates.
							Talk to other fans and cheer on the directors as they work to release the film.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
			</div>
		</div>
	</section>
	<!--=== Services section Ends ===-->

	<!--=== Mission Statement section Starts ===-->
	<section id="step-1" class="section-step step-wrap">
		<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-8 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">

						</div>
					</div>

					<div class="col-md-10 step-details">
							<h3 class="step-title color-scheme">Our mission</h3>
							<p class="step-description">
								The core of the company's vision is to encourage people to validate themselves
								through their own expression. Though media has expanded greatly in terms
								of diversity, there is still remains a cookie-cutter mold in regards to which
								actors and narratives are given a chance to shine. We hope to level the playing
								field by bringing the resources a little closer to up and coming filmmakers.

								Your dream doesn't have to wait for someone else to give you a green light.
								If you have the talent, the drive, and a passion for your craft nothing can stop you.
							</p>
<!--
							<ul class="sub-steps"> <!-- Sub steps here -->

<!--
								<li>
									<span class="icon fa fa-comments color-scheme"></span>
									<span class="sub-text">skateboard freegan hella. Cillum laboris consequat qui elit</span>
								</li>
								<li>
									<span class="icon fa fa-pencil-square-o color-scheme"></span>
									<span class="sub-text">Documenting collected data</span>
								</li>
							</ul>
					</div> <!-- End step-details -->

				</div>


				<!-- Step Description Ends -->
<!--
				<div class="col-md-4 step-img">
					<img src="images/note.png" alt="" /> <!-- Step Photo Here -->


				</div>
			</div>
		</div>
	</section>

	<!--=== Step-1 section Ends ===-->



	<!--=== Features section Starts ===-->
	<!--=== Features section Ends ===-->




	<!--=== Step-2 section Starts ===-->
<!--
	<section id="step-2" class="section-step step-even step-wrap">
		<div class="container step animated" data-animation="bounceInRight" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
<!--
				<div class="col-md-8 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">2</span>
						</div>
					</div>
-->
<!--
					<div class="col-md-10 step-details">
							<h3 class="step-title color-scheme">Work flow title here</h3>
							<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level
							skateboard freegan hella. Cillum laboris consequat qui elit retro next level
							skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>

							<ul class="sub-steps"> <!-- Sub steps here -->
-->
<!--
								<li>
									<span class="icon fa fa-comments color-scheme"></span>
									<span class="sub-text">skateboard freegan hella. Cillum laboris consequat qui elit</span>
								</li>
								<li>
									<span class="icon fa fa-pencil-square-o color-scheme"></span>
									<span class="sub-text">Documenting collected data</span>
								</li>

							</ul>
					</div><!-- End step-details xs
<!--
				</div>

	-->
	<!--
				<!-- Step Description Ends -->
<!--
				<div class="col-md-4 step-img">
					<img src="images/desk.png" alt="" /> <!-- Step Photo Here -->
<!--
				</div>
			</div>
		</div>
	</section>

-->
	<!--=== Step-2 section Ends ===-->




	<!--=== Video section Starts ===-->

	<section id="section-video" class="section-video-wrap">
		<div class="section-overlay"></div>
		<div class="container big-video center animated" data-animation="fadeInLeft" data-animation-delay="700">
			<div class="row">
				<div class="col-md-12 section-title">
					<h3>Be Your Own Voice</h3>
				</div>
				<div class="col-md-10 col-md-offset-1 video-content">
					<iframe src="http://player.vimeo.com/video/75317749?title=0&amp;byline=0&amp;portrait=0" width="400" height="240"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!--=== Video section Ends ===-->

	<!--=== ScreenShots section Starts ===-->
	<section id="section-screenshots" class="screenshots-wrap">
		<div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="1000">
			<div class="row porfolio-container">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Our Latest Projects</h3>
				</div>
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/7.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Wordpress theme</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
					</div>
				</div>
				<!-- Single screenshot ends -->

				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/2.jpg" alt="" />
							<div class="photo-overlay">
								<h4>User Interface design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>

					</div>
				</div>
				<!-- Single screenshot ends -->

				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/3.jpg" alt="" />
							<div class="photo-overlay">
								<h4>PSD template design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>

					</div>
				</div>
				<!-- Single screenshot ends -->

				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/4.jpg" alt="" />
							<div class="photo-overlay">
								<h4>User Experience design</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>

					</div>
				</div>
				<!-- Single screenshot ends -->

				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/5.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Page builder plugin</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>

					</div>
				</div>
				<!-- Single screenshot ends -->

				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/6.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Corporate website</h4>
							</div>
							<span class="photo-zoom">
								<a href="single-project-2.html" class="view-project"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>

					</div>
				</div>
				<!-- Single screenshot ends -->

			</div>

			<div id="portfolio-loader" class="center">
				<div class="loading-circle fa-spin"></div>
			</div> <!--=== Portfolio loader ===-->

			<div id="portfolio-load"></div><!--=== ajax content will be loaded here ===-->

			<div class="col-md-12 center back-button">
				<a class="backToProject fancy-button button-line bell btn-col" href="#">
					Back
					<span class="icon">
						<i class="fa fa-arrow-left"></i>
					</span>
				</a>
			</div><!--=== Single portfolio back button ===-->
		</div>
	</section>
	<!--=== ScreenShots section Ends ===-->

	<!--=== Testimonials section Starts ===-->
	<section id="section-testimonials" class="testimonials-wrap">
		<div class="section-overlay"></div>
		<div class="container testimonials center animated" data-animation="rollIn" data-animation-delay="500">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-slider">
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum,
								quam urna fringilla magna
							</p>

							<h5 class="happy-client">Amber Adams</h5>
							<span class="client-info">Founder of Pitch it</span>
						</div>
						<!-- Single Testimonial Ends -->

						<!-- Single Testimonial Starts -->
<!--
						<div class="testimonial">
							<p class="comment">
								Dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum,
								quam urna fringilla magna
							</p>

							<h5 class="happy-client">JB Jeniffer</h5>
							<span class="client-info">Developer at TTF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->

-->

						<!-- Single Testimonial Starts -->
<!--
						<div class="testimonial">
							<p class="comment">
								Consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum,
								quam urna fringilla magna
							</p>

							<h5 class="happy-client">Chan Jhin</h5>
							<span class="client-info">CEO of MutiNaTakio.</span>
						</div>
						<!-- Single Testimonial Ends -->
<!--
					</div>
-->
					<div id="bx-pager" class="client-photos">
						<a data-slide-index="0" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client_1.jpg" alt="" /> <!-- Client photo 1 -->
							</span>
						</a>
						<a data-slide-index="1" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client_2.jpg" alt="" /> <!-- Client photo 2 -->
							</span>
						</a>
						<a data-slide-index="2" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client_3.jpg" alt="" /> <!-- Client photo 3 -->
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Testimonials section Ends ===-->


	<!--=== Pricing section Starts ===-->
	<section id="section-pricing" class="pricing-wrap">
		<div class="container pricing">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Plans & pricing</h3>
				</div>
				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
					<div class="single-pricing">

						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Creative</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									0
									<span class="month">/month</span>
								</h3>
							</div>
						</div>

						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Professional profile</li>
							<li><span class="color-scheme fa fa-check"></span>Demo reel</li>
							<li><span class="color-scheme fa fa-check"></span>Apply to projects</li>
							<li><span class="color-scheme fa fa-check"></span>Network</li>
							<li><span class="color-scheme fa fa-check"></span>Portfolio images</li>
							<li><span class="color-scheme fa fa-close"></span>Pitch a project</li>
							<li><span class="color-scheme fa fa-close"></span>Scheduling tools</l>
								<li><span class="color-scheme fa fa-close"></span>Post film screenings</li>
						</ul>
						<div class="sign-up">
							<a href="pitch_signup.html" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->


				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="700">
					<div class="single-pricing best-pricing"> <!-- this is best-pricing -->

						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Creator</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									20
									<span class="month">/month</span>
								</h3>
							</div>
						</div>

						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Professional profile</li>
							<li><span class="color-scheme fa fa-check"></span>Demo reel</li>
							<li><span class="color-scheme fa fa-check"></span>Apply to projects</li>
							<li><span class="color-scheme fa fa-check"></span>Network</li>
							<li><span class="color-scheme fa fa-check"></span>portfolio images</li>
							<li><span class="color-scheme fa fa-check"></span>Pitch a project</li>
							<li><span class="color-scheme fa fa-check"></span>Scheduling tools</l>
							<li><span class="color-scheme fa fa-check"></span>Post film screenings</li>
						</ul>
						<div class="sign-up">
							<a href="pitch_signup.html" class="fancy-button button-line btn-col vertical">
								Sign up
								<span class="icon">
									<i class="fa fa-hand-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->

				<!-- Single Price Starts -->
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="900">
					<div class="single-pricing">

						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Employer</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									100
									<span class="month">/month</span>
								</h3>
							</div>
						</div>

						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Professional Profile</li>
							<li><span class="color-scheme fa fa-check"></span>Demo Reel</li>
							<li><span class="color-scheme fa fa-check"></span>Post salaried positions</li>
							<li><span class="color-scheme fa fa-check"></span>Follow talented creatives</li>
							<li><span class="color-scheme fa fa-check"></span>Send hire requests</li>
							<li><span class="color-scheme fa fa-check"></span>Pitch a project</li>
						</ul>
						<div class="sign-up">
							<a href="pitch_signup.html" class="fancy-button button-line btn-col rotate">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Single Price Ends -->

				<!-- Single Price Starts -->
	<!--===			<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="1100">
					<div class="single-pricing">

						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Employer</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									100
									<span class="month">/month</span>
								</h3>
							</div>
						</div>

						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-check"></span>Voice call</li>
							<li><span class="color-scheme fa fa-check"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="/Users/Amber/Desktop/MyThinkLaunch/pitch/bootstrap/egret/signup.html" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>===-->
				<!-- Single Price Ends -->

			</div>
		</div>
	</section>
	<!--=== Pricing section Ends ===-->

	<!--=== Subscribe section Starts ===-->
	<section id="section-subscribe" class="subscribe-wrap">
		<div class="section-overlay"></div>
		<div class="container subscribe center">
			<div class="row">
				<div class="col-lg-12">
					<p class="subscription-success"></p>
					<p class="subscription-failed"></p>
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Newsletter</h3>
					</div>
					<form id="subscription-form">
						<input type="email" name="EMAIL" required="required" placeholder="Your Email" class="input-email" />
						<button type="submit" id="subscription-btn" class="fancy-button button-line button-white large zoom">
							Subscribe
							<span class="icon">
								<i class="fa fa-sign-in"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Subscribe section Ends ===-->


	<!--=== Download section Starts ===-->
	<section id="section-download" class="download-wrap">
		<div class="container download center">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Download app</h3>
					</div>
					<div class="download-buttons clearfix"> <!-- Download Buttons -->
						<a class="fancy-button button-line no-text btn-col large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-apple"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-android"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-windows"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Download section Ends ===-->


	<!--=== Contact section Starts ===-->
	<section id="section-contact" class="contact-wrap">
	<div class="section-overlay"></div>
		<div class="container contact center animated" data-animation="flipInY" data-animation-delay="1000">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Leave a message</h3>
						<p>Have a business inquiry?</p>
					</div>

					<div class="confirmation">
						<p><span class="fa fa-check"></span></p>
					</div>

					<form class="contact-form support-form">

						<div class="col-lg-12">
							<input id="name" class="input-field form-item field-name" type="text" required="required" name="contact-name" placeholder="Name" />

							<input id="email" class="input-field form-item field-email" type="email" required="required" name="contact-email" placeholder="Email" />

							<input id="subject" class="input-field form-item field-subject" type="text" required="required" name="contact-subject" placeholder="Subject" />
							<textarea id="message" class="textarea-field form-item field-message" rows="10" name="contact-message" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="fancy-button button-line button-white large zoom subform">
							Send message
							<span class="icon">
								<i class="fa fa-paper-plane-o"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Contact section Ends ===-->

	<!--=== Footer section Starts ===-->
	<div id="section-footer" class="footer-wrap">
		<div class="container footer center">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="footer-title"><!-- Footer Title -->

						<img src="images/pitchlogo.png" class="pitchlogo" alt="">
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

					<p class="copyright">All rights reserved &copy; 2018</p>
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
<script type="text/javascript" src="js/jquery.baraja.js"></script>
<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

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

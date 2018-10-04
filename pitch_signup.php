
<?php
include 'includes/header.inc.php';
include_once 'includes/dbh.inc.php';
?>

		<section class="section-step">
			<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
				<div class="row">
					<!-- Step Description Starts -->
					<div class="col-md-8 step-desc">
						<div class="col-md-2 center">
						</div>
						<div class="col-md-10 step-details">
            </div>
          </div>

          <div>
            <h3>Sign up</h3>
            <br>
            <form action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="Firstname">
            <br>
            <input type="text" name="last" placeholder="Lastname">
            <br>
						<input type="text" name="email" placeholder="E-mail">
						<br>
						<input type="password" name="pwd" placeholder="Password">
            <br>
						<input type="password" name="pwd" placeholder="Password">
            <br>
            <input type="radio" name="membership" value="Creative">
            Creative (Free Membership)
            <br>
            <input type="radio" name="membership" value="Creator">
            Creator ($20/ month)
            <br>
            <input type="radio" name="membership" value="Employer">
            Employer ($100/month)
            <br>
						<br>
						<div class="Billing Information">
			        <br>
			        <h4>Billing Information</h4>
			        ____________________
							<br>
			      </div>
						<br>
						<button type="submit" name="submit">Sign up</button>
            </form>
						<br>
						<a href="profile.php">Already a member yet? Login</a>
          </div>




		</section>


	   <div class="">
		<!-- <script type="text/javascript">
			const base = require('airtable').base('appkazMUS3HDgFRUx');



		</script> -->


	   </div>



		 <?php
		 include_once 'footer.inc.php';

		  ?>

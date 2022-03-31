<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>SOLE TO SOUL</title>
	<link rel="icon" href="img/logo.svg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css?v=9" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css?v=9">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo.svg">
		<label>SOLE TO SOUL</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>

	<br>
<div id="container">
	<div class="nav">
			 
			 <ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Product</a>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="faqs.php">FAQs</a></li>
			</ul>
	</div>



		<div id="content">
			<legend>Frequently Added Questions</legend>

				 
					<h4>DO YOU DELIVER?</h4>
						<p style="text-indent:60px;">No, We only offer Shipping.</p>
				<hr>
					<h4>WHEN WILL I GET MY ORDERS?</h4>
						<p style="text-indent:60px;">We wil ship your product 2-3 days around Chandigarh, India and It will take 4-6 days Nationwide.</p>
				<hr>
					<h4>HOW DO I PAY MY ORDERS?</h4>
					<p style="text-indent:60px;">Through PAYPAL basis only.</p>
				<hr>
					<h4>DO YOU ACCEPT RETURNS?</h4>
					<p>Yes, we do accept returns subject to fulfilment of the following conditions:
					<br>
					- The item must have been sold on our online store
					<br>
					- The item shouldn't have been used in any way
					<br>
					- The item should have its original packaging.
					<br>
					- The return or exchange request is made within 7 days of delivery.
					<br>
					</p>
					</h4>

		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">Sole to Soul 2022 </p>
		</div>

			<div id="foot">
				<h4>Team Members</h4>
					<ul>
						
					<li>Avneesh Sood</li>
					<li>Gurleen Singh</li>
					<li>Jashan Khurana</li>
					<li>Radhika Aggi</li>
					<li>Suveer Bhatia</li>
					</ul>
			</div>
	</div>
</body>
</html>

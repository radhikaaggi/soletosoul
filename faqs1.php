<?php
	include("function/session.php");
	include("db/dbconn.php");
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

			<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>



	<br>
<div id="container">
	<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="product1.php">Product</a>
				<li><a href="aboutus1.php">About Us</a></li>
				<li><a href="contactus1.php">Contact Us</a></li>
				<li><a href="privacy1.php">Privacy Policy</a></li>
				<li><a href="faqs1.php">FAQs</a></li>
			</ul>
	</div>

	<br />
	<br />

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
</div>
	<br />
<div>
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
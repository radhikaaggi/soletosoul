<?php
ob_start();
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>SOLE TO SOUL</title>
	<link rel="icon" href="../img/logo.svg" />
	<link rel = "stylesheet" type = "text/css" href="../css/style.css?v=10" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css?v=9">
	<!-- button -->
	
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>

		<!--Le Facebox-->
		<link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
		<script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<script src="../facefiles/facebox.js" type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox()
		})
		</script>
</head>
<body>
	<div id="header" style="position:fixed;">
	<img src="../img/logo.svg">
	<label>SOLE TO SOUL</label>

			<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>

	<br>

<!-- add form -->
		<a href="#add" role="button" class="btn btn-primary" data-toggle="modal" style="position:absolute;margin-left:222px; margin-top:140px; z-index:-1000;"><i class="icon-plus-sign icon-white"></i>Add Product</a>
		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:800px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Add Product...</h3>
				</div>
					<div class="modal-body">
						<form method="post" enctype="multipart/form-data">
						<center>
							<table>
								<tr>
									<td><input type="file" name="product_image" ></td>
								</tr>
								<?php include("random_id.php");
								echo '<tr>
									<td><input type="hidden" name="product_code" value="'.$code.'" ></td>
								<tr/>';
								?>
								<tr>
									<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" ></td>
								<tr/>
								<tr>
									<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" ></td>
								</tr>
								<tr>
									<td><input type="text" name="product_size" placeholder="Size" style="width:250px;" maxLength="2" ></td>
								</tr>
								<tr>
									<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" ></td>
								</tr>
								<tr>
									<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" ></td>
								</tr>
								<tr>
									<td><input type="hidden" name="category" value="feature"></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<input class="btn btn-primary" type="submit" name="add" value="Add">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
						</form>
				</div>
		</div>

		<!-- edit -->

		<a href="#edit" role="button" class="btn btn-primary" data-toggle="modal" style="position:absolute;margin-left:400px; margin-top:140px; z-index:-1000;"><i class="icon-plus-sign icon-white"></i>Edit Product</a>
		<div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:800px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Edit Product...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>

								<td><input type="text" name="product_code" placeholder='Product Code' ></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" ></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" ></td>
							</tr>
							<tr>
								<td><input type="text" name="product_size" placeholder="Size" style="width:250px;" maxLength="2" ></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" ></td>
							</tr>
		
							<tr>
								<td><input type="hidden" name="category" value="feature"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="edit" value="Edit">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
		
<!-- add php -->
		<?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);

								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];

								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);


				$q1 = $conn->query("INSERT INTO product ( product_id,product_name, product_price, product_size, product_image, brand, category)
				VALUES ('$product_code','$product_name','$product_price','$product_size','$name', '$brand', '$category')");

				$q2 = $conn->query("INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");

				header ("location:admin_feature.php");
								

			}}
		}

				?>
			<!-- edit php -->
			<?php
			if (isset($_POST['edit']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];

				
				$ck = $conn -> query("SELECT * FROM product WHERE product_id = '$product_code'  LIMIT 1");

				if(mysqli_num_rows($ck)>0){

					$data = mysqli_fetch_assoc($ck);

					$product_name == '' ? $product_name = $data['product_name'] : '';
					$product_price == '' ? $product_price = $data['product_price'] : '';
					$product_size == '' ? $product_size = $data['product_size'] : '';
					$brand == '' ? $brand = $data['brand'] : '';
					$category == '' ? $category = $data['category'] : '';


					$up = $conn -> query("UPDATE product SET product_name='$product_name', product_price = '$product_price', product_size = '$product_size', brand = '$brand', category = '$category' WHERE product_id = '$product_code'");

					if($up){
						header("location:admin_feature.php?success=true");
					}else{
						header("location:admin_feature.php?success=false");
					}

				}else{

					header("location:admin_feature.php?err=false");
						
				}


			}
		?>

<div id="leftnav">
		<ul>
			<li><a href="admin_home.php" style="color:#fff;">Dashboard</a></li>
			<?php 
				$has_access_product = $_SESSION['has_access_product']; 
				
				if($has_access_product == 1){
					
					echo '<li><a href="admin_home.php">Products</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px;">Features</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Basketball</a></li>
					<li><a href="admin_football.php" style="font-size:15px; margin-left:15px;">Football</a></li>
					<li><a href="admin_running.php"style="font-size:15px; margin-left:15px;">Running</a></li>
				</ul>
			</li>';
		    }
	        ?>
			<?php 
				$has_access_trans = $_SESSION['has_access_trans']; 
				
				if($has_access_trans == 1){
					
					echo '<li><a href="transaction.php">Transactions</a></li>';
				}
				?>
			<?php 
				$has_access_customer = $_SESSION['has_access_customer'];
				
				if($has_access_customer == 1){
					echo '<li><a href="customer.php">Customers</a></li>';
				}
			?>
			<?php 
				$has_access_msg = $_SESSION['has_access_msg']; 
				
				if($has_access_msg == 1){
					
					echo '<li><a href="message.php">Messages</a></li>';
				}
			?>
			<?php 
					$has_access_order = $_SESSION['has_access_order']; 
					
					if($has_access_order == 1){
						
						echo '<li><a href="order.php">Orders</a></li>';
					}
				?>
		</ul>
	</div>

	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Features</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..." id="filter"></label>
			<br />

			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Product ID</th>
					<th>Product Image</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Sizes</th>
					<th>No. of Stock</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php

					$query = $conn->query("SELECT * FROM `product` WHERE category='feature' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
						$id = $fetch['product_id'];
				?>
				<tr class="del<?php echo $id?>">
					<td><?php echo $fetch['product_id']?></td>
					<td><img class="img-polaroid" src = "../photo/<?php echo $fetch['product_image']?>" height = "70px" width = "80px"></td>
					<td><?php echo $fetch['product_name']?></td>
					<td><?php echo $fetch['product_price']?></td>
					<td><?php echo $fetch['product_size']?></td>

					<?php
					$query1 = $conn->query("SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = $query1->fetch_array();

						$qty = $fetch1['qty'];
					?>

					<td><?php echo $fetch1['qty']?></td>
					<td>
					<?php
					$pass = md5('passwrodl');
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-info' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a> </br>"; 
					echo "<a href='../function/remove.php?id=".$id."' class='btn btn-danger' ><i class='icon-minus-sign icon-white'></i> Remove</a> </br>"; 
				
					?>
					</td>
					<!-- <script type="text/javascript">
						$(document).ready( function() {
	
							$('.remove').click( function() {


							var id = $(this).attr("id");
							console.log('id ', id);
							return ;

							if(confirm("Are you sure you want to delete this product?")){


								$.ajax({
								type: "POST",
								url: "../function/remove.php",
								data: ({id: id}),
								cache: false,
								success: function(html){
								$(".del"+id).fadeOut(2000, function(){ $(this).remove();});
								}
								});
								}else{
								return false;}
							}); -->

				<!-- </script> -->
				</tr>
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			</div>

  <?php
  /* stock in */
  if(isset($_POST['stockin'])){

  $pid = $_POST['pid'];

 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();

  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;

  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());

  echo "<script>window.location = 'admin_feature.php'</script>";
	//header("Location:admin_feature.php");
 }

  /* stock out */
 if(isset($_POST['stockout'])){

  $pid = $_POST['pid'];

 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();

  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;

  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());

  echo "<script>window.location = 'admin_feature.php'</script>";
  //header("location:admin_feature.php");
 }
  ?>


<script>
'use strict';

document.getElementById('remove').onclick= function ()=>{
	console.log('yes');
}

</script>

</body>
</html>

<?php
ob_end_flush();
?>
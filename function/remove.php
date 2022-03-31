<?php
include('../db/dbconn.php');

$id = $_GET['id'];
$conn->query("DELETE FROM product WHERE product_id = '$id'") or die(mysqli_error());

header('location:http://localhost/shoe/admin/admin_feature.php?removed=true');
header('location:http://localhost/shoe/admin/admin_product.php?removed=true');
header('location:http://localhost/shoe/admin/admin_football.php?removed=true');
header('location:http://localhost/shoe/admin/admin_running.php?removed=true');

?>


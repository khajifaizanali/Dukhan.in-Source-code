<?php
$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));

session_start();

$prodid=$_GET['ide'];
$user=$_SESSION['user_id'];
$del="DELETE FROM users_items WHERE product_id='$prodid' AND users_id='$user'";
$del_result= mysqli_query($con, $del) or die(mysqli_error($con));
header('location:cart.php');
?>


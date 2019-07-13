<?php

$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));
$mail=$_GET['email'];
$address=$_GET['address'];
$contact=$_GET['contact'];
$sel="SELECT * FROM users WHERE email_id='$mail'";
$sel_result= mysqli_query($con, $sel) or die(mysqli_error($con));
$row=mysqli_fetch_array($sel_result);
$id=$row['id'];
$upd="UPDATE users_items SET delivery='delivered' WHERE users_id=$id AND status='confirmed' AND address='$address' AND contact=$contact";
$upd_result= mysqli_query($con, $upd) or die(mysqli_error($con));
$up="UPDATE checkout SET delivery='delivered' WHERE emailid='$mail' AND delivery='notdelivered' AND address='$address' AND contactno=$contact";
$up_result= mysqli_query($con, $up) or die(mysqli_error($con));
header('location:delivery.php');

?>
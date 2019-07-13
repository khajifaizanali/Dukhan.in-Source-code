<?php
require("includes/common.php");
    $qu = $_POST['fname'];
    $user_id = $_SESSION['user_id'];
    $sel="SELECT * FROM users_items WHERE product_id=107 AND users_id=$user_id AND status='added to cart'";
   $res= mysqli_query($con, $sel) or die(mysqli_error($con));
   $ro= mysqli_num_rows($res);
   if($ro==0){
    $query = "INSERT INTO users_items(users_id, product_id, status,quantity,delivery) VALUES('$user_id', 107, 'added to cart',$qu,'notdelivered')";
    mysqli_query($con, $query) or die(mysqli_error($con));
  echo 'added to cart';
   }
   else{
       echo 'already in cart';
   }

?>   
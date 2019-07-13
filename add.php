

<?php
require("includes/common.php");
        $user_id=$_SESSION['user_id'];
        $ite_id = $_GET['id'];
  $sel="SELECT * FROM users_items WHERE product_id=$ite_id AND users_id='$user_id' AND status='added to cart'" ;
  $sel_res= mysqli_query($con, $sel) or die(mysqli_error($con));
  $quan= mysqli_fetch_array($sel_res);
  $qu=$quan['quantity'];
  $qu=$qu+1;
  $upd="UPDATE users_items SET quantity=$qu WHERE product_id=$ite_id AND users_id='$user_id' AND status='added to cart' ";
  $res= mysqli_query($con, $upd) or die(mysqli_error($con));
  header('location:products.php')

?> 


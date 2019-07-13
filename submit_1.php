<?php
require("includes/common.php");
    $qu = $_POST['fname'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(users_id, product_id, status,quantity,delivery) VALUES('$user_id', 1, 'added to cart',$qu,'notdelivered')";
    mysqli_query($con, $query) or die(mysqli_error($con));
  echo 'added to cart';

?>   
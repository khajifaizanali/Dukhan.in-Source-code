<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(users_id, product_id, status,quantity,delivery) VALUES('$user_id', '$item_id', 'added to cart',1,'notdelivered')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
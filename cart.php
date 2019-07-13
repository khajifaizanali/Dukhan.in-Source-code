<?php 

$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));
session_start();
$userid= $_SESSION['user_id'];
$sele="SELECT * FROM users_items WHERE users_id= $userid and status='added to cart' ";
$result= mysqli_query($con, $sele) or die(mysqli_error($con));


?>
<html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <style>
@media only screen and (max-width: 600px) {
    table {
        padding-left: none;
    }
}
</style>
    </head>
    <body>
<?php 
include 'includes/header.php';
?>
        <div class="table-responsive-sm" style="padding-left: 10%; padding-right: 10%">
        <table class="table table-bordered">
           
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php if(mysqli_num_rows($result) == 0){?>
                  <tr><td></td><td> No Items In Cart </td><td> </td><td>  
                
               <tr><td></td><td> total </td><td> Rs.0/- </td>
                <?php } else {
                    $counter=1;
                    $price=0;
                while($row=mysqli_fetch_array($result)){?>
    <tr>
      <th scope="row" width="10%"><?php echo $counter++; ?></th>
      <td width="40%"><img src="img/<?php echo $row['product_id'] ?>.jpg" alt="" width="100px" height="100px"><?php
                   $proid=$row['product_id'] ;
                   $selet_pro="SELECT * FROM items WHERE id= $proid";
               $result_pro= mysqli_query($con, $selet_pro) or die(mysqli_error($con));
              $row_pro=mysqli_fetch_array($result_pro);
              echo $row_pro['name'];?></td>
      <td width="20%">Rs.<?php echo $row_pro['price']*$row['quantity']; ?></td>
      
      <td  width="10%"><?php if (($proid>159 && $proid<174) || ($proid>177 && $proid<183)){
      echo $row['quantity']."gms";
      
      }
      else{
       echo   $row['quantity'];
      }
?></td>
      <td width="20%"> <a href="cart-remove.php?ide=<?php echo $row['product_id']; ?>" name="add" value="add" class="btn btn-block btn-danger">Delete</a> </td>
    </tr>
    <?php 
               $price= $price+ $row_pro['price']*$row['quantity'];} ?>
               <tr><td></td><td> total </td><td> Rs.<?php echo $price ?></td></tr>
      
 
        <?php } ?>
  </tbody>
</table>
            <center>
                
  <a href="checkout.php" class="btn  btn-primary" value="confirm order" name="success">check out</a>
                
    </div>
    <footer style="background-color: white;">
        <div >
                <center>
                    <p>Contact Us: 9642914399,9626222139</p>	
                </center>
            </div>
        </footer>
</html>


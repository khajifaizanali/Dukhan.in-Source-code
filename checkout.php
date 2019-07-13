<?php
$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));
session_start();
$userid= $_SESSION['user_id'];
$emailid= $_SESSION['email'];
$sele="SELECT * FROM users_items WHERE users_id= $userid and status='added to cart' ";
$result= mysqli_query($con, $sele) or die(mysqli_error($con));
$price=0;
while($row=mysqli_fetch_array($result)){
     $proid=$row['product_id'] ;
                   $selet_pro="SELECT * FROM items WHERE id= $proid";
               $result_pro= mysqli_query($con, $selet_pro) or die(mysqli_error($con));
              $row_pro=mysqli_fetch_array($result_pro);
              $price= $price+ $row_pro['price']*$row['quantity'];
}
if(isset($_POST['coupon'])){
    $coup=$_POST['couponcode'];
    if($coup=='FAIZAN' || $coup=='BHARATH' || $coup=='GUYSFRDS' || $coup=='REVENUE' || $coup=='SPARK301' || $coup='RAMGIRI'|| $coup=='BUNNY'||$coup="MONTESSORI"|| $coup='EENADU'){
        $price=$price-(0.001*$price);
        $msg ='coupon code valid';
$updae="UPDATE users SET couponcode='valid' WHERE id=$userid ";
$updae_result= mysqli_query($con,$updae) or die(mysqli_error($con));
        
    }
    else{
        $msg='coupon code is invalid';
    }
}
if(isset($_POST['submit'])){
  $ad=$_POST['address'];  
  $cont=$_POST['cont'];
$see="SELECT * FROM users WHERE id= $userid ";
$reslt= mysqli_query($con, $see) or die(mysqli_error($con));
$ra=mysqli_fetch_array($reslt);
$coup=$ra['couponcode'];
$point=$ra['POINTS'];

if($coup=='valid'){
$price=$price;
}
if($price>=249){
$price=$price;
}
else{
$price=$price+0;
}
$update2="UPDATE users SET POINTS=($price/10)+$point WHERE id=$userid ";
$update2_result= mysqli_query($con,$update2) or die(mysqli_error($con));

$update="UPDATE users_items SET status='confirmed',address='$ad',contact=$cont WHERE users_id=$userid AND status='added to cart' ";
$update_result= mysqli_query($con,$update) or die(mysqli_error($con));
$ins="INSERT INTO checkout(total,address,emailid,contactno,delivery)VALUES('$price','$ad','$emailid','$cont','notdelivered')";
$ins_result= mysqli_query($con, $ins) or die(mysqli_error($con));
header('location:success.php');
}

?>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Checkout</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
    
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>BILLING</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>enter your detalis for delivery</i><p>
                                    <form action="checkout.php" method="POST">
                                    
                                        <input type="text"  class="form-control" placeholder="enter coupon code" name="couponcode" required = "true" style="width:150px; height:50px; margin-bottom: 15px;">
                                        
                                    
                                        <button type="submit" name="coupon" class="btn btn-danger" style="margin-bottom: 15px;">add coupon</button>
                                    <div>
                                        <?php
                                        if(isset($msg))
                                        {
                                        echo $msg;
                                        }
                                        ?>
                                    </form>
                                <form action="checkout.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="address to be delivered" name="address" required = "true">
                                        
                                    </div>
                                     <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Contact number for delivery" maxlength="10" size="10"  placeholder="contact number for delivery" name="cont" required = "true">
                                        
                                    </div>
                                    
                                        
                                        total:<?php echo $price;?><br>
                                        <br>
                                        checkout-total:<?php 
if($price>249){
$price=$price;
echo $price;
echo "earned points:".($price/10);
}else{
$price=$price+0;
echo $price;
echo "<br>earned dukhan points:".($price/10);

}
                                        ?><br>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">confirm order</button><br><br>
                                </form><br/>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>



<?php
require 'includes/common.php';
$us= $_SESSION['user_id'];
$email=$_SESSION['email'];
 require 'PHPMailer-master/PHPMailerAutoload.php';
$update="UPDATE users SET couponcode='notvalid' WHERE id=$us ";
$update_result= mysqli_query($con,$update) or die(mysqli_error($con));
$sele="SELECT * FROM users_items WHERE users_id= $us AND status='confirmed' AND delivery='notdelivered' ";
$sel="SELECT * FROM checkout WHERE emailid='$email' ";
$result= mysqli_query($con, $sele) or die(mysqli_error($con));
$resul= mysqli_query($con, $sel) or die(mysqli_error($con));
$rows=mysqli_fetch_array($resul);
$ad=$rows['address'];
$string="";
while($row=mysqli_fetch_array($result)){
    $proid=$row['product_id'] ;
                   $selet_pro="SELECT * FROM items WHERE id= $proid";
               $result_pro= mysqli_query($con, $selet_pro) or die(mysqli_error($con));
              $row_pro=mysqli_fetch_array($result_pro);
              $string=$string.",<br>".$row_pro['name'];
}
    $mail = new PHPMailer();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = false;
   $mail ->SMTPSecure = false;
   $mail ->Host = "localhost";
   $mail ->Port = 25; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "faizanali@dukhan.in";
   $mail ->Password = "khajiali@786";
   $mail ->setFrom('faizanali@dukhan.in', 'order placed');
   $mail ->Subject = "dhukhan";
   $mail ->Body = "hello,<br>Thank you for ordering in the dukhan.Your order".$string."will be delivered with in minimum of 30mins and maximum of 24hrs any quieries contact 9492202473 or 9642914399";
   $mail ->addAddress($email);
    $mail->send();
     $mail = new PHPMailer();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = false;
   $mail ->SMTPSecure = false;
   $mail ->Host = "localhost";
   $mail ->Port = 25; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "faizanali@dukhan.in";
   $mail ->Password = "khajiali@786";
   $mail ->setFrom('faizanali@dukhan.in', 'order placed');
   $mail ->Subject = "dhukhan";
   $mail ->Body = "check the link for other delivery quieries";
   $mail ->addAddress('faizanalikhaji@gmail.com');
    $mail->send();

?>
<html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmation</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head> 
    <body>
             <?php 
include 'includes/header.php';
?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Your orderwill be delivered with in minimum of 30mins and maximum of 24hrsClick <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
      <footer>
    <div class="container">
        <center>
            <p>Copyright &copy; dukhan.in. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>

    </body>
  
</html>

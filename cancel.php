<?php
$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));

session_start();

$prodid=$_GET['ide'];
$user=$_SESSION['user_id'];
$del="UPDATE users_items SET status='canceled' WHERE users_id=$user AND product_id=$prodid";
$del_result= mysqli_query($con, $del) or die(mysqli_error($con));

 require 'PHPMailer-master/PHPMailerAutoload.php';
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
   $mail ->Body = "your order  has successfully cancelled";
   $mail ->addAddress($_SESSION['email']);
    $mail->send();

?>
<html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cancel</title>

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
</div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is successfully canceled. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
      <footer>
    <div class="container">
        <center>
            <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
        </center>
    </div>
</footer>

    </body>
  
</html>

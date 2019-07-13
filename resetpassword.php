<?php

if(isset($_GET["email"]) && isset($_GET["token"])){
    $con = mysqli_connect("localhost", "dukhan", "khajiali@786", "9store")or die($mysqli_error($con));
     $email=mysqli_real_escape_string($con,$_GET["email"]);
      $token=mysqli_real_escape_string($con,$_GET["token"]);
      $sel="SELECT id FROM users WHERE email_id='$email' AND token='$token'";
   $data=mysqli_query($con,$sel) or die($mysqli_error($con));
   $num=mysqli_num_rows($data);
   if($num>0 && isset($_POST['password'])){
       $Pass=$_POST['password'];
       $upd ="UPDATE users SET password=$pass WHERE email_id='$email'";
          $dat=mysqli_query($con,$sel) or die($mysqli_error($con));
 
   }else{
       echo "please check your link";
   }
}else{
    header("location:login.php");
    exit();
}
?>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="resetpassword.php" method="POST">
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
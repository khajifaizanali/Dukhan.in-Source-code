<?php
if(isset($_POST["forgetpass"])){
   $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    $email=mysqli_real_escape_string($con,$_POST["email"]);
   $sel ="SELECT id FROM users WHERE email_id='$email'";
   $data=mysqli_query($con,$sel) or die($mysqli_error($con));
   $num=mysqli_num_rows($data);
   if($num>0){
       $str="qwertyuiopasdfghjklzxcvbnm1234567890";
       $str= str_shuffle($str);
       $str= substr($str,0,6);
       $url="https://faizanalikhaji.000webhostapp.com/resetpassword.php?token=$str&email=$email";
 require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->isSMTP();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth =   TRUE ;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = 'khajifaizanali123@gmail.com';
   $mail ->Password = 'khajiali@786';
   $mail ->setFrom('khajifaizanali123@gmail.com', 'ORDER PLACED');
   $mail ->Subject = "dhukhan";
   $mail ->Body = $url;
   $mail ->addAddress($email);
   $upd ="UPDATE users SET token='$str' WHERE email_id='$email'";
    $data=mysqli_query($con,$upd) or die(mysqli_error($con));

   if(!$mail->send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "URL has sent to ur mail";
   }
   }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
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
        <div class="row">
            <div class="col-xs-offset-3 col-xs-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>email-id</h3>
                    </div>
                    <div classs="panel-body">
                        <form action="forget.php" method="POST">
            <div class="form-group">
            <input type="text" class="form-control" name="email" place-holder="enter email-id">
            </div>
            <div class="form-group">
                <center>
            <input type="submit" class="btn btn-primary" name="forgetpass" value="submit">
                </center>
            </div>
        </form>
                    </div>
            </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

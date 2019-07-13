<?php
$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));
session_start();
$userid= $_SESSION['user_id'];
$emailid= $_SESSION['email'];
$sele="SELECT * FROM users WHERE id= $userid";
$result= mysqli_query($con, $sele) or die(mysqli_error($con));
$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MY POINTS</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        ?>

        <h1>MY DUKHAN POINTS:<?php echo $row['POINTS'] ?> </h1>
<h3>terms and conditions:</h3>
<ul>
<li>10 points will be automatically added  as dukhan points on  ordering for every ₹100</li>
<li>You can use these My dukhan points as you earn more points</li>
<li>By using these dukhan points,You can get maximum discounts on dukhan.in products as per our norms</li>

</ul>
        <footer style="background-color:white;">
    <div class="container">
        <center>
            <p> Contact Us: 9642914399,9626222139</p>	
        </center>
    </div>
</footer>
    </body>
</html>
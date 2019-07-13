<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Terms and conditions</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <h1>Terms and conditions…</h1>
            <p>1)	Your privacy is important to us, and we know that you care about how information about your order is used and shared. We would like our customers shipping products to be aware that shipments are subject to opening and inspection by Legal authorities.</p>
            <p>
                2)	All the food products of better quality. Usage of the edible products available in our store are to be consumed at their own risk with keeping in mind about self-health conditions.
            </p>
            <p>
                3)	Any legal matters are to be settled in Anantapur court Andhra Pradesh  .
            </p>
            <p>
                4)	This is purely a service-oriented organization.
            </p>
            <p>
                5)	The total price is combination of  all taxes and service charges  will be  added for developing the Organization.
            </p>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>
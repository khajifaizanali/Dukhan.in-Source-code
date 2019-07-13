<?php
session_start();                

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <script src = "script120.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/120.jpg" alt="">
                        <div class="caption">
                            <h3>sugar 1kg </h3>
                            <p>Price: Rs.37</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname120" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit120" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response120"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

               
            <hr>
        </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>

</html>





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
        <script src = "script108.js"></script>
        <script src = "script109.js"></script>
        <script src = "script110.js"></script>
        <script src = "script76.js"></script>

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
                        <img src="img/108.jpg" alt="">
                        <div class="caption">
                            <h3>kellogs chocos 375gms</h3>
                               MRP:  <strike> Rs.155</strike>
                          <p>ourprice:150</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname108" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit108" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response108"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/109.jpg" alt="">
                        <div class="caption">
                            <h3>kellogs cornflakes realstrawberry 275gms </h3>
                                 MRP:  <strike> Rs.130</strike>
                          <p>ourprice:121</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname109" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit109" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response109"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/110.jpg" alt="">
                        <div class="caption">
                            <h3>kellogs chocos 250gms</h3>
                                 MRP:  <strike> Rs.115</strike>
                          <p>ourprice:106</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname110" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit110" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response110"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

          
            </div>

   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

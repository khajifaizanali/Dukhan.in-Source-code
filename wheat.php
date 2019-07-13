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
        <script src = "script72.js"></script>
        <script src = "script73.js"></script>
        <script src = "script75.js"></script>
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
                        <img src="img/72.jpg" alt="">
                        <div class="caption">
                            <h3>ashirvaad aata 1kg </h3>
                                                          MRP:  <strike> Rs.51</strike>
                          <p>ourprice:43</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname72" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit72" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response72"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/73.jpg" alt="">
                        <div class="caption">
                            <h3>pilsburry atta 1kg </h3>
                                            MRP:  <strike> Rs.51</strike>
                          <p>ourprice:43</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname73" style="width:75px;" value="1">
	
    <button id = "formsubmit73" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response73"></div>
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
                        <img src="img/75.jpg" alt="">
                        <div class="caption">
                            <h3>aashirvaad atta 5kg </h3>
                                            MRP:  <strike> Rs.235</strike>
                          <p>ourprice:200</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname75" style="width:75px;" value="1">
	
    <button id = "formsubmit75" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response75"></div>
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
                        <img src="img/76.jpg" alt="">
                        <div class="caption">
                            <h3>pilsburry atta 5kg</h3>
                                         MRP:  <strike> Rs.235</strike>
                          <p>ourprice:200</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname76" style="width:75px;" value="1">
	
    <button id = "formsubmit76" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response76"></div>
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

